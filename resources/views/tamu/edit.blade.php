@extends('tamu.layout')

@section('content')
<div class="card">
    <div class="card-header">
        Edit Tamu
    </div>
    <div class="card-body">
        <form action="{{ route('tamu.update', $tamu->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $tamu->nama }}" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ $tamu->email }}">
            </div>
            <div class="mb-3">
                <label>No Telp</label>
                <input type="text" name="no_telp" class="form-control" value="{{ $tamu->no_telp }}">
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control">{{ $tamu->alamat }}</textarea>
            </div>
            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="Pending" {{ $tamu->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                    <option value="Dihubungi" {{ $tamu->status == 'Dihubungi' ? 'selected' : '' }}>Dihubungi</option>
                    <option value="Selesai" {{ $tamu->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('tamu.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
