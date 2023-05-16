@extends('layouts/app')
@section('content')
    <header class="masthead bg-2">
        <div class="container">
        </div>
    </header>

    <section class="profil" id="profil">
        <div class="container">
            <div class="section-title" data-aos="zoom-in">
                <h2>Makluman Pelayanan UPTD Puskesmas Grobogan</h2>
            </div>
            <div class="frame m-3 text-center">
                <img class="img-fluid" src="/images/Frame6.png" width="200px">
            </div>
            <div class="text-center">
                {{ $data->body }}
            </div>
        </div>
    </section>
@endsection
