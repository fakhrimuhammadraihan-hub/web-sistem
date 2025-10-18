<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function index()
    {
        $tamus = Tamu::with(['pantita', 'status'])->latest()->get();
        return view('tamus.index', compact('tamus'));
    }

    public function create()
    {
        $users = User::all();
        $statuses = Status::all();
        return view('tamus.create', compact('users', 'statuses'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'nama_siswa' => 'required|string|max:100',
            'asal_sekolah' => 'nullable|string|max:100',
            'nama_orangtua' => 'nullable|string|max:100',
            'phone_orangtua' => 'nullable|string|max:20',
            'keterangan' => 'nullable|string',
            'pantita_id' => 'required|exists:users,user_id',
            'status_id' => 'required|exists:status,status_id',
        ]);

        Tamu::create($validated);

        return redirect()->route('tamus.index')
            ->with('success', 'Data tamu berhasil ditambahkan!');
    }

    public function show(Tamu $tamu)
    {
        $tamu->load(['pantita', 'status']);
        return view('tamus.show', compact('tamu'));
    }

    public function edit(Tamu $tamu)
    {
        $users = User::all();
        $statuses = Status::all();
        return view('tamus.edit', compact('tamu', 'users', 'statuses'));
    }

    public function update(Request $request, Tamu $tamu)
    {
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'nama_siswa' => 'required|string|max:100',
            'asal_sekolah' => 'nullable|string|max:100',
            'nama_orangtua' => 'nullable|string|max:100',
            'phone_orangtua' => 'nullable|string|max:20',
            'keterangan' => 'nullable|string',
            'pantita_id' => 'required|exists:users,user_id',
            'status_id' => 'required|exists:status,status_id',
        ]);

        $tamu->update($validated);

        return redirect()->route('tamus.index')
            ->with('success', 'Data tamu berhasil diperbarui!');
    }

    public function destroy(Tamu $tamu)
    {
        $tamu->delete();

        return redirect()->route('tamus.index')
            ->with('success', 'Data tamu berhasil dihapus!');
    }
}   