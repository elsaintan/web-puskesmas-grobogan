@extends('layouts/dashboard')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Layanan</h1>
    </div>
    <div class="table-responsive col-lg-8">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Categori Layanan</th>
                    <th scope="col">Tipe Layanan</th>
                    <th scope="col">Jadwal</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->tipe_layanan }}</td>
                        <td>{{ $item->jadwal }}</td>
                        <td>
                            <a href="/dashboard/layanan/{{ $item->id }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="/dashboard/layanan/{{ $item->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
