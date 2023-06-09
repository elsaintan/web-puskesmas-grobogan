@extends('layouts/dashboard')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tata Nilai</h1>
    </div>
    <div class="col-lg-8">
        <form method="POST" action="/dashboard/updateImage" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <input type="hidden" name="oldImage" value="{{ $data->body }}">
                <input type="hidden" name="type" value="{{ $data->type }}">
                @if ($data->body)
                    <img src="{{ asset('storage/' . $data->body) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                @endif

                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                    name="body" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
