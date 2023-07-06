@extends('layouts/dashboard')
@section('content')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h3 class="mb-3">{{ $data->type }}</h3>
                <a href="/dashboard/layanan" class="btn btn-success"><span data-feather="arrow-left"></span> Back</a>
                <a href="/dashboard/layanan/{{ $data->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                    Edit</a>
                <article class="my-3 fs-5">
                    {{ $data->description }}
                </article>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-lg-8">
                <h3 class="mb-3">Jadwal Pemeriksaan</h3>
                <div>
                    <p style="font-weight: 100"><b> JADWAL : {{ $data->jadwal }}</b></p>
                    <p style="font-weight: 100"><b> PEMERIKSAAN : </b></p>
                    <table class="table">
                        <thead class="table-success">
                            <tr>
                                <th scope="col">HARI</th>
                                <th scope="col">JAM BUKA</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pemeriksaan as $value)
                                <tr>
                                    <td>{{ $value->hari }}</td>
                                    <td>{{ $value->jam }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-lg-8">
                <h3 class="mb-3">Standar Pelayanan</h3>
                <img class="img-fluid" src="{{ asset('storage/standar_pelayanan/' . $data->standar_pelayanan) }}">
            </div>
        </div>
    </div>
@endsection
