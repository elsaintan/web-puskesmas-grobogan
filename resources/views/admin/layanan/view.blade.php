@extends('layouts/dashboard')
@section('content')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                <a href="/dashboard/layanan" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my
                    post</a>
                <a href="/dashboard/layanan/{{ $item->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span>
                    Edit</a>
                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid mt-3">
                    </div>
                @else
                    <img src="/images/blog/single-blog-feature-image.jpg" alt="" class="img-fluid mt-3">
                @endif
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
