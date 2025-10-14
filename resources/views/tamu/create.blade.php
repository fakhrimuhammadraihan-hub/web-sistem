@extends('tamu.layout')

@section('content')
<div class="card">
    <div class="card-header">
        Tambah Tamu
    </div>
    <div class="card-body">
        <form action="{{ route('tamu.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label>No Telp</label>
                <input type="text" name="no_telp" class="form-control">
            </div>
            <div class="mb-3">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="Pending">Pending</option>
                    <option value="Dihubungi">Dihubungi</option>
                    <option value="Selesai">Selesai</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('tamu.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
