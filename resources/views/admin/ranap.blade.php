@extends('layouts/dashboard')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Layanan Rawat Inap</h1>
    </div>
    <div class="col-lg-8">
        <form method="POST" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    <option value="UGD">UGD</option>
                    <option value="VK">VK (Ruang Bersalin)</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" id="textAreaExample2" rows="5">{{ old('body') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="jadwal" class="form-label">Jadwal</label>
                <input type="text" name="jadwal" id="jadwal" class="form-control">
            </div>
            <div class="mb-3">
                <label for="jadwal" class="form-label">Pendaftaran</label>
                <div id="jadwal">
                    <div class="row">
                        <div class="col-5">
                            <input type="text" name="hari" id="hari" class="form-control" placeholder="Hari">
                        </div>
                        <div class="col-5">
                            <input type="text" name="jam" id="jam" class="form-control" placeholder="Jam Buka">
                        </div>
                        <div class="col-2">
                            <button id="addMore" type="button" class="btn btn-primary">Add more</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Standar Pelayanan</label>
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
