@extends('layouts/app')
@section('content')

    <header class="masthead bg-4">
        <div class="container">
        </div>
    </header>

    <section class="profil" id="profil">
        <div class="container">
            <div class="section-title" data-aos="zoom-in">
                <h2>Survey Kepuasan Masyarakat</h2>
            </div>
            <div class="frame m-3 text-center">
                <img class="img-fluid" src="/images/Frame6.png" width="200px">
            </div>
        </div>
    </section>

    <section class="section testimonial" id="testimonial">
        <div class="container text-center">
            <iframe class=""
                src="https://docs.google.com/forms/d/e/1FAIpQLSc0nmDKFs7QK7W36Cbt7w8-QCr-lqQln5iPwEyGe22t7PPa2g/viewform?embedded=true"
                width="900" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
        </div>
    </section>

    @endsection
