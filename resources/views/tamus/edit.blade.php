@extends('layouts.app')

@section('title', 'Edit Data Tamu')

@section('content')
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Edit Data Tamu</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('tamus.update', $tamu->tamu_id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal <span class="text-danger">*</span></label>
                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" 
                               id="tanggal" name="tanggal" 
                               value="{{ old('tanggal', $tamu->tanggal->format('Y-m-d')) }}" required>
                        @error('tanggal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nama_siswa" class="form-label">Nama Siswa <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror" 
                               id="nama_siswa" name="nama_siswa" 
                               value="{{ old('nama_siswa', $tamu->nama_siswa) }}" required>
                        @error('nama_siswa')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                        <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" 
                               id="asal_sekolah" name="asal_sekolah" 
                               value="{{ old('asal_sekolah', $tamu->asal_sekolah) }}">
                        @error('asal_sekolah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nama_orangtua" class="form-label">Nama Orang Tua</label>
                        <input type="text" class="form-control @error('nama_orangtua') is-invalid @enderror" 
                               id="nama_orangtua" name="nama_orangtua" 
                               value="{{ old('nama_orangtua', $tamu->nama_orangtua) }}">
                        @error('nama_orangtua')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="phone_orangtua" class="form-label">Telepon Orang Tua</label>
                        <input type="text" class="form-control @error('phone_orangtua') is-invalid @enderror" 
                               id="phone_orangtua" name="phone_orangtua" 
                               value="{{ old('phone_orangtua', $tamu->phone_orangtua) }}">
                        @error('phone_orangtua')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="pantita_id" class="form-label">Panitia <span class="text-danger">*</span></label>
                        <select class="form-select @error('pantita_id') is-invalid @enderror" 
                                id="pantita_id" name="pantita_id" required>
                            <option value="">Pilih Panitia</option>
                            @foreach($users as $user)
                                <option value="{{ $user->user_id }}" 
                                    {{ old('pantita_id', $tamu->pantita_id) == $user->user_id ? 'selected' : '' }}>
                                    {{ $user->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('pantita_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="status_id" class="form-label">Status <span class="text-danger">*</span></label>
                        <select class="form-select @error('status_id') is-invalid @enderror" 
                                id="status_id" name="status_id" required>
                            <option value="">Pilih Status</option>
                            @foreach($statuses as $status)
                                <option value="{{ $status->status_id }}" 
                                    {{ old('status_id', $tamu->status_id) == $status->status_id ? 'selected' : '' }}>
                                    {{ $status->status }}
                                </option>
                            @endforeach
                        </select>
                        @error('status_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea class="form-control @error('keterangan') is-invalid @enderror" 
                          id="keterangan" name="keterangan" rows="3">{{ old('keterangan', $tamu->keterangan) }}</textarea>
                @error('keterangan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save me-1"></i>Update
                </button>
                <a href="{{ route('tamus.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left me-1"></i>Kembali
                </a>
            </div>
        </form>
    </div>
</div>
@endsection