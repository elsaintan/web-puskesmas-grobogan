@extends('layouts/app')
@section('content')
    <header class="masthead bg-4">
        <div class="container">
        </div>
    </header>

    <section class="profil" id="profil">
        <div class="container">
            <div class="section-title" data-aos="zoom-in">
                <h2>Layanan Pengaduan dan Saran</h2>
            </div>
            <div class="frame m-3">
                <img class="mx-auto d-block" src="/images/Frame6.png" width="200px">
            </div>
        </div>
    </section>

    <section class="contact-form section">
        <div class="container">
            @if (session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="/pengaduan-dan-saran/send" method="POST">
                        @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nama">Nama/Ciri Pegawai</label>
                        <input type="text" class="form-control" name="nama_pegawai" id="nama" placeholder="Nama/Ciri Pegawai">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ruangan">Nama Ruangan</label>
                        <input type="text" class="form-control" name="nama_ruangan" id="ruangan" placeholder="Nama Ruangan">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Kritik & Saran</label>
                    <textarea class="form-control" name="pesan" id="message" rows="3" placeholder="Kritik & Saran"></textarea>
                </div>
                <div class="form-group text-center"><button type="submit" class="btn btn-success">Kirim Aduan</button>
                </div>
            </form>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="frame m-3">
                <img class="mx-auto d-block" src="/images/Frame6.png" width="200px">
            </div>
        </div>
    </section>
@endsection
