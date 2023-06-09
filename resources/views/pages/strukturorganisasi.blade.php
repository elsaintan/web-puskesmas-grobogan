@extends('layouts/app')
@section('content')
    <header class="masthead bg-2">
        <div class="container">
            <div class="container" align="center">
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            <h1 class="font-weight-bold">Struktur Organisasi</h1>
            UPTD Puskesmas Grobogan
        </div>
        </div>
    </header>

    <section class="profil" id="profil">
        <div class="container">
            <div class="section-title" data-aos="zoom-in">
                <h2>Struktur Organisasi UPTD Puskesmas Grobogan</h2>
            </div>
            <div class="frame m-3 text-center">
                <img class="img-fluid" src="/images/Frame6.png" width="200px">
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container" align="center">
            <img src="{{ asset('storage/' . $data->body) }}">
        </div>
    </section>

@endsection
