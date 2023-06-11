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
                <h1 class="font-weight-bold">Tentang Puskesmas</h1>
                UPTD Puskesmas Grobogan
            </div>
        </div>
    </header>

    <section class="content">
        <div class="container">
            <div class="text-justify">
                </br>
                </br>
                {!! $data->body !!}
            </div>
        </div>
    </section>
@endsection
