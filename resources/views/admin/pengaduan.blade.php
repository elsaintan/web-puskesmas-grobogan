@extends('layouts/dashboard')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Aduan</h1>
    </div>
    <div class="table-responsive col-lg-10">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama/Ciri Pegawai</th>
                    <th scope="col">Nama Ruangan</th>
                    <th scope="col">Kritik/Saran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_pegawai }}</td>
                        <td>{{ $item->nama_ruangan }}</td>
                        <td>{{ $item->pesan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
