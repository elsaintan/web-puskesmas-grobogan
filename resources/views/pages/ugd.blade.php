@extends('layouts/app')
@section('content')
    <header class="masthead bg-4">
        <div class="container">
        </div>
    </header>

    <section class="profil" id="profil">
        <div class="container">
            <div class="section-title" data-aos="zoom-in">
                <h2>{{ $data->type }}</h2>
            </div>
            <div class="frame m-3">
                <img class="mx-auto d-block" src="/images/Frame6.png" width="200px">
            </div>
            <div>
                <p align="justify">{{ $data->description }}</p>
            </div>
        </div>
    </section>

    <section class="contact-form section">
        <div class="container">
            <div class="section-title" data-aos="zoom-in">
                <h2>Jadwal Pelayanan</h2>
            </div>
            <div>
                <h3 style="font-weight: 100">JADWAL :</h3>
                <p>{{ $data->jadwal }}</p>
                </br>
                <h3 style="font-weight: 100">PEMERIKSAAN :</h3>
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
    </section>

    <section class="contact-form section">
        <div class="container">
            <div class="section-title" data-aos="zoom-in">
                <h2>Standar Pelayanan</h2>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container" align="center">
            <img src="{{ asset('storage/standar_pelayanan/' . $data->standar_pelayanan) }}" height="600px">
        </div>
    </section>
@endsection
