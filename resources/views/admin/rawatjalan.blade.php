@extends('layouts/dashboard')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Layanan Rawat Jalan</h1>
    </div>
    <div class="col-lg-8">
        <form method="POST" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    <option value="loket-pendaftaran">Loket Pendaftaran</option>
                    <option value="bp1">BP 1 (umum)</option>
                    <option value="bp2">BP 2 (Lansia)</option>
                    <option value="kia">KIA</option>
                    <option value="laborat">Laborat</option>
                    <option value="mtbs">MTBS</option>
                    <option value="gizi-dan-konseling">Gizi dan Konseling</option>
                    <option value="gigi-dan-mulut">Gigi dan mulut</option>
                    <option value="fisioterapi">Fisioterapi</option>
                    <option value="kb">KB</option>
                    <option value="tb">TB</option>
                    <option value="apotek">Apotek</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="textAreaExample2" rows="8">{{ old('body') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="jadwal" class="form-label">Jadwal</label>
                <input type="text" name="jadwal" id="jadwal" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

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
