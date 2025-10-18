@extends('layouts.app')

@section('title', 'Detail Tamu')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Detail Data Tamu</h5>
        <div class="btn-group">
            <a href="{{ route('tamus.edit', $tamu->tamu_id) }}" class="btn btn-warning btn-sm">
                <i class="bi bi-pencil me-1"></i>Edit
            </a>
            <a href="{{ route('tamus.index') }}" class="btn btn-secondary btn-sm">
                <i class="bi bi-arrow-left me-1"></i>Kembali
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered">
                    <tr>
                        <th width="30%">ID Tamu</th>
                        <td>{{ $tamu->tamu_id }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal</th>
                        <td>{{ $tamu->tanggal->format('d/m/Y') }}</td>
                    </tr>
                    <tr>
                        <th>Nama Siswa</th>
                        <td>{{ $tamu->nama_siswa }}</td>
                    </tr>
                    <tr>
                        <th>Asal Sekolah</th>
                        <td>{{ $tamu->asal_sekolah ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>Nama Orang Tua</th>
                        <td>{{ $tamu->nama_orangtua ?? '-' }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-bordered">
                    <tr>
                        <th width="30%">Telepon Orang Tua</th>
                        <td>{{ $tamu->phone_orangtua ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            <span class="badge 
                                @if($tamu->status->status == 'Pending') bg-warning
                                @elseif($tamu->status->status == 'Dikonfirmasi') bg-success
                                @elseif($tamu->status->status == 'Ditolak') bg-danger
                                @else bg-secondary @endif">
                                {{ $tamu->status->status }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th>Panitia</th>
                        <td>{{ $tamu->pantita->name }}</td>
                    </tr>
                    <tr>
                        <th>Email Panitia</th>
                        <td>{{ $tamu->pantita->email }}</td>
                    </tr>
                    <tr>
                        <th>Telepon Panitia</th>
                        <td>{{ $tamu->pantita->phone ?? '-' }}</td>
                    </tr>
                </table>
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col-12">
                <label class="form-label"><strong>Keterangan:</strong></label>
                <div class="border p-3 rounded bg-light">
                    {{ $tamu->keterangan ?: 'Tidak ada keterangan' }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection