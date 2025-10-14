@extends('tamu.layout')

@section('content')
<div class="card shadow">
    <div class="card-header bg-primary text-white">
        <h4>Daftar Tamu</h4>
    </div>
    <div class="card-body">
        @if($tamus->isEmpty())
            <p>Tidak ada tamu yang terdaftar.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Instansi</th>
                        <th>Tujuan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tamus as $index => $tamu)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $tamu->nama }}</td>
                            <td>{{ $tamu->instansi }}</td>
                            <td>{{ $tamu->tujuan }}</td>
                            <td>{{ $tamu->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
@endsection
