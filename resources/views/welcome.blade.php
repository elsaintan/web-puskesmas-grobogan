@extends('layouts/master')
@section('content')
    <header class="masthead bg-3">
        <div class="container">
        </div>
    </header>
    <!--====  End of Hero Section  ====-->
    {{-- <section class="section pt-0 position-relative pull-top">
        <div class="container">
            <div class="shadow p-4" style="background-color: #FFF500">
                <div class="row g-0">
                    {{-- <div class="col-md-1 text-right">
                        <i class="fa fa-map-marker fa-3x" style="color:#019934"></i>
                    </div> --}}
                    {{-- <div class="col-md-4 col-sm-2 text-left">
                        <i class="fa fa-map-marker fa-3x" style="color:#019934"></i>
                        <h5>Lokasi</h5>
                        <p>Jl. Pangeran Puger No.160, Grobogan</p>
                    </div> --}}
                    {{-- <div class="col text-left">
                        <img src="/images/minus.png" height="65px">
                    </div> --}}
                    {{-- <div class="col-md-1 text-right">
                        <i class="fa fa-phone fa-3x" style="color:#019934"></i>
                    </div> --}}
                    {{-- <div class="col-md-2 text-left">
                        <i class="fa fa-phone fa-3x" style="color:#019934"></i>
                        <h5>Telepon</h5>
                        <p> (0292) 7703006</p>
                    </div> --}}
                    {{-- <div class="col text-left">
                        <img src="/images/minus.png" height="65px">
                    </div> --}}
                    {{-- <div class="col-md-1 text-right">
                        <i class="fa fa-whatsapp fa-3x" style="color:#019934"></i>
                    </div> --}}
                    {{-- <div class="col-md-2 text-left">
                        <i class="fa fa-whatsapp fa-3x" style="color:#019934"></i>
                        <h5>WhatsApp</h5>
                        <p>+62889900111</p>
                    </div>
                </div>
            </div>
        </div> --}}
    {{-- </section> --}}

    <section class="section pt-0 position-relative pull-top">
        <div class="container">
            <div class="rounded shadow p-5 bg-white">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
                        <i class="ti-map-alt h1" style="color:#019934"></i>
                        <h3 class="mt-4 text-capitalize h5 ">Lokasi</h3>
                        <p class="regular text-muted">Jl. Pangeran Puger No.160, Grobogan</p>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
                        <i class="ti-headphone-alt h1" style="color:#019934"></i>
                        <h3 class="mt-4 text-capitalize h5 ">Telepon</h3>
                        <p class="regular text-muted">(0292) 7703006</p>
                    </div>
                    <div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
                        <i class="ti-mobile h1" style="color:#019934"></i>
                        <h3 class="mt-4 text-capitalize h5 ">WhatsApp</h3>
                        <p class="regular text-muted">+62895620040900</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="section-title" data-aos="zoom-in">
                <h2>AKREDITASI UPTD PUSKESMAS GROBOGAN</h2>
            </div>
            <div class="text-center">
                <img class="img-fluid" src="{{ asset('storage/' . $sertifikasi->body) }}">
            </div>
        </div>
    </section>

    <div class="frame m-3 text-center">
        <img class="img-fluid" src="/images/Frame3.png">
    </div>

    <section>
        <div class="container">
            <div class="section-title" data-aos="zoom-in">
                <h2>INDEKS KEPUASAN MASYARAKAT</h2>
            </div>
            <div class="text-center">
                <img class="img-fluid" src="{{ asset('storage/' . $akreditasi->body) }}"></p>
                <a href="{{ URL::route('survey') }}">Isi Survey Kepuasan Masayarakat </a> <i class="fa fa-long-arrow-right"></i>
            </div>
        </div>
    </section>

    <div class="frame m-3 text-center">
        <img class="img-fluid" src="/images/Frame3.png">
    </div>

    <!--=================================
                                                                                                                                                                                                                                                                                                                        =     Posts   =
                                                                                                                                                                                                                                                                                                                    =============================-->
    <section class="section testimonial" id="testimonial">
        <div class="container">
            <div class="section-title">
                <h2>ARTIKEL</h2>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6">
                        <!-- Post -->
                        <article class="post-sm">
                            <!-- Post Image -->
                            <div class="post-thumb">
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid">
                                @else
                                    <a href="#"><img class="w-100" src="/images/blog/post-01.jpg"
                                            alt="Post-Image"></a>
                                @endif
                            </div>
                            <!-- Post Title -->
                            <div class="post-title">
                                <h3><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                                </h3>
                            </div>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <ul class="list-inline post-tag">
                                    <li class="list-inline-item">
                                        By {{ $post->user->name }} in <a
                                            href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                                    </li>
                                    <li class="list-inline-item">
                                        {{ \Carbon\Carbon::parse($post->published_at)->format('D M Y') }}
                                    </li>
                                </ul>
                            </div>
                            <!-- Post Details -->
                            <div class="post-details">
                                <p>{{ $post->excerpt }}</p>
                            </div>
                        </article>
                    </div>
                @endforeach
                <div class="col-12">
                    <!-- Pagination                                                                                                                                                                    </nav> -->
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </section>
    <!--====  End of Posts  ====-->
@endsection
