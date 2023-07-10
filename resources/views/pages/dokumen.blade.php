@extends('layouts/app')
@section('content')
    <header class="masthead bg-2">
        <div class="container" align="center">
            </br>
            </br>
            </br>
            </br>
            </br>
            </br>
            <h1 class="font-weight-bold">Dokumen</h1>
            UPTD Puskesmas Grobogan
        </div>
    </header>

    <section class="profil" id="profil">
        <div class="container">
            <div class="section-title" data-aos="zoom-in">
                <h2>{{ $title }} UPTD Puskesmas Grobogan</h2>
            </div>
            <div class="frame m-3 text-center">
                <img class="img-fluid" src="/images/Frame6.png" width="200px">
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        @foreach ($data as $item)
                            <tr>
                                <th scope="col"><a href="javascript:void(0);" onclick="javascipt:window.open('{{ asset('/storage/dokumen/'. $item->dokumen ) }}');">{{ $item->dokumen }}</a></th>
                            </tr>
                        @endforeach
                    </thead>
                </table>
            </div>
        </div>
    </section>
@endsection
