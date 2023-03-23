@extends('layouts/master')
@section('content')
    <header class="masthead">
        <div class="container">
        </div>
    </header>
    <!--====  End of Hero Section  ====-->
    <section class="section pt-0 position-relative pull-top">
        <div class="container">
            <div class="shadow p-4" style="background-color: #FFF500">
                <div class="row g-0">
                    <div class="col-md-1 text-right">
                        <i class="fa fa-map-marker fa-3x" style="color:#019934"></i>
                    </div>
                    <div class="col-md-4 text-left">
                        <h5>Lokasi</h5>
                        <p>Jl. Pangeran Puger No.160, Grobogan</p>
                    </div>
                    <div class="col text-left">
                        <img src="/images/minus.png" height="65px">
                    </div>
                    <div class="col-md-1 text-right">
                        <i class="fa fa-phone fa-3x" style="color:#019934"></i>
                    </div>
                    <div class="col-md-2 text-left">
                        <h5>Telepon</h5>
                        <p>(0292) 7703006</p>
                    </div>
                    <div class="col text-left">
                        <img src="/images/minus.png" height="65px">
                    </div>
                    <div class="col-md-1 text-right">
                        <i class="fa fa-whatsapp fa-3x" style="color:#019934"></i>
                    </div>
                    <div class="col-md-2 text-left">
                        <h5>WhatsApp</h5>
                        <p>+62889900111</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="akreditasi" id="akreditasi">
        <div class="container">
            <div class="section-title">
                <h2>AKREDITASI PUSKESMAS GROBOGAN</h2>
            </div>
            <div>
                <img class="mx-auto d-block" src="/images/Sertifikasi.png">
            </div>
        </div>
    </section>

    <div class="frame m-3">
        <img class="mx-auto d-block" src="/images/Frame3.png">
    </div>

    <section>
        <div class="container">
            <div class="section-title">
                <h2>INDEKS KEPUASAN MASYARAKAT</h2>
            </div>
            <div class="text-center">
                <img class="mx-auto d-block" src="/images/SKM.png">
                <a href="$">Isi Survey Kepuasan Masayarakat</a>
            </div>
        </div>
    </section>

    <div class="frame m-3">
        <img class="mx-auto d-block" src="/images/Frame3.png">
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
                                        {{ $post->published_at }}
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
