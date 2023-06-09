@extends('layouts/dashboard')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        @if ($data->tipe_layanan == "rawat-inap")
            <h1 class="h2">Layanan Rawat Inap</h1>
        @else
            <h1 class="h2">Layanan Rawat Jalan</h1>
        @endif

    </div>
    <div class="col-lg-8">
        <form method="POST" action="/dashboard/layanan/update" class="mb-5" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $data->id }}">
            <div class="mb-3">
                <label for="type" class="form-label">Kategori Layanan</label>
                <input type="text" name="type" id="type" class="form-control" value="{{ $data->type }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" class="form-control" id="description" rows="5">{{ $data->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="jadwal" class="form-label">Jadwal</label>
                <input type="text" name="jadwal" id="jadwal" class="form-control" value="{{ $data->jadwal }}">
            </div>
            <div class="mb-3">
                <label for="jadwal" class="form-label">Pendaftaran</label>
                <div id="jadwal">
                    @foreach ($pemeriksaan as $item)
                    <div class="row p-1">
                        <input type="hidden" name="id_pemeriksaan[]" value="{{ $item->id }}">
                        <div class="col-6">
                            <input type="text" name="hari[]" id="hari" class="form-control" value="{{ $item->hari }}">
                        </div>
                        <div class="col-6">
                            <input type="text" name="jam[]" id="jam" class="form-control" value="{{ $item->jam }}">
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Standar Pelayanan</label>
                @if ($data->standar_pelayanan)
                    <img src="{{ asset('storage/standar_pelayanan/' . $data->standar_pelayanan) }}"
                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                    <input type="hidden" name="oldImage" value="{{ $data->standar_pelayanan }}">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                @endif

                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                    name="standar_pelayanan" onchange="previewImage()">
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

        document.getElementById('addMore').addEventListener('click', jadwal)

        function jadwal() {

            document.getElementById('jadwal').innerHTML = '<ol><li>html data</li></ol>';

            /*e.preventDefault();
                $("#jadwal").append("<div class='row'>");
                $("#jadwal").append("<div class='col-5'>");
                $("#jadwal").append(
                    "<input type='text' name='hari[]' id='hari' class='form-control' placeholder='Hari'>"
                    );
                $("#jadwal").append("</div>");
                $("#jadwal").append("<div class='col-5'>");
                $("#jadwal").append(
                    "<input type='text' name='jam[]' id='jam' class='form-control' placeholder='Jam'>");
                $("#jadwal").append("</div>");
                $("#jadwal").append("</div>"); */
        }
    </script>
@endsection
