<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;

class TamuController extends Controller
{
    public function index()
    {
        $tamus = Tamu::all();
        return view('tamu.index', compact('tamus'));
    }

    public function create()
    {
        return view('tamu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'no_telp' => 'nullable|string|max:50',
            'alamat' => 'nullable|string',
            'instansi' => 'nullable|string|max:255',
            'tujuan' => 'nullable|string|max:255',
            'status' => 'required|string'
        ]);

        Tamu::create($request->only(['nama','email','no_telp','alamat','instansi','tujuan','status']));

        return redirect()->route('tamu.index')->with('success', 'Tamu berhasil ditambahkan');
    }

    public function show(Tamu $tamu)
    {
        return view('tamu.show', compact('tamu')); // optional, hanya jika butuh halaman detail
    }

    public function edit(Tamu $tamu)
    {
        return view('tamu.edit', compact('tamu'));
    }

    public function update(Request $request, Tamu $tamu)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'no_telp' => 'nullable|string|max:50',
            'alamat' => 'nullable|string',
            'instansi' => 'nullable|string|max:255',
            'tujuan' => 'nullable|string|max:255',
            'status' => 'required|string'
        ]);

        $tamu->update($request->only(['nama','email','no_telp','alamat','instansi','tujuan','status']));

        return redirect()->route('tamu.index')->with('success', 'Data tamu berhasil diupdate');
    }

    public function destroy(Tamu $tamu)
    {
        $tamu->delete();
        return redirect()->route('tamu.index')->with('success', 'Tamu berhasil dihapus');
    }
}
