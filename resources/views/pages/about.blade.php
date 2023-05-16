@extends('layouts/app')
@section('content')
    <header class="masthead bg-2">
        <div class="container">
        </div>
    </header>

    <section class="content">
        <div class="container">
            <div class="text-center">
                {{ $data->body }}
            </div>
        </div>
    </section>

@endsection
