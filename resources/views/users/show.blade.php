@extends('layouts.app')

@section('title', 'Detail User')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Detail User</h5>
        <div class="btn-group">
            <a href="{{ route('users.edit', $user->user_id) }}" class="btn btn-warning btn-sm">
                <i class="bi bi-pencil me-1"></i>Edit
            </a>
            <a href="{{ route('users.index') }}" class="btn btn-secondary btn-sm">
                <i class="bi bi-arrow-left me-1"></i>Kembali
            </a>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered">
                    <tr>
                        <th width="30%">ID User</th>
                        <td>{{ $user->user_id }}</td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th>Telepon</th>
                        <td>{{ $user->phone ?? '-' }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-bordered">
                    <tr>
                        <th width="30%">Tanggal Dibuat</th>
                        <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                    <tr>
                        <th>Terakhir Diupdate</th>
                        <td>{{ $user->updated_at->format('d/m/Y H:i') }}</td>
                    </tr>
                    <tr>
                        <th>Jumlah Tamu</th>
                        <td>
                            <span class="badge bg-primary">{{ $user->tamus->count() }} tamu</span>
                        </td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            <span class="badge bg-success">Aktif</span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        
        @if($user->tamus->count() > 0)
        <div class="row mt-4">
            <div class="col-12">
                <h6 class="mb-3">Daftar Tamu yang Ditangani:</h6>
                <div class="table-responsive">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Siswa</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($user->tamus as $tamu)
                            <tr>
                                <td>{{ $tamu->nama_siswa }}</td>
                                <td>{{ $tamu->tanggal->format('d/m/Y') }}</td>
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection