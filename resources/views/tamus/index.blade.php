@extends('layouts.app')

@section('title', 'Data Tamu')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Daftar Tamu</h5>
        <a href="{{ route('tamus.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-1"></i>Tambah Tamu
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Nama Siswa</th>
                        <th>Asal Sekolah</th>
                        <th>Nama Orang Tua</th>
                        <th>Status</th>
                        <th>Panitia</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($tamus as $tamu)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $tamu->tanggal->format('d/m/Y') }}</td>
                        <td>{{ $tamu->nama_siswa }}</td>
                        <td>{{ $tamu->asal_sekolah ?? '-' }}</td>
                        <td>{{ $tamu->nama_orangtua ?? '-' }}</td>
                        <td>
                            <span class="badge 
                                @if($tamu->status->status == 'Pending') bg-warning
                                @elseif($tamu->status->status == 'Dikonfirmasi') bg-success
                                @elseif($tamu->status->status == 'Ditolak') bg-danger
                                @else bg-secondary @endif">
                                {{ $tamu->status->status }}
                            </span>
                        </td>
                        <td>{{ $tamu->pantita->name }}</td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('tamus.show', $tamu->tamu_id) }}" 
                                   class="btn btn-info" title="Lihat">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="{{ route('tamus.edit', $tamu->tamu_id) }}" 
                                   class="btn btn-warning" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <form action="{{ route('tamus.destroy', $tamu->tamu_id) }}" 
                                      method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" 
                                            title="Hapus" 
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center">Tidak ada data tamu.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection