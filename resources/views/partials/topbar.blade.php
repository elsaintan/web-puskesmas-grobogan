<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="{{ URL::asset('images/Frame.png') }}" alt="logo"
                width="260" height="50"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ $active === 'home' ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="{{ URL::route('home') }}">Beranda
                    </a>
                </li>
                <li class="nav-item dropdown @@profile {{ $active === 'profil' ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Profil <span><i
                                class="ti-angle-down"></i></span></a>
                    <!-- Dropdown list -->
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item @@visimisi" href="/visi-misi">Visi Misi</a>
                        </li>
                        <li><a class="dropdown-item @@tatanilai" href="/tata-nilai">Tata Nilai</a></li>
                        <li><a class="dropdown-item @@motto" href="/motto">Motto</a>
                        </li>
                        <li><a class="dropdown-item @@struktur" href="/maklumat-pelayanan">Maklumat
                                Pelayanan</a>
                        </li>
                        <li><a class="dropdown-item @@sk" href="/struktur-organisasi">Struktur
                                Organisasi</a>
                        </li>
                        <li><a class="dropdown-item @@sop" href="/tentang-puskesmas">Tentang
                                Puskesmas</a></li>
                        <li><a class="dropdown-item @@galeri" href="/galeri">Galeri</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown @@layanan {{ $active === 'layanan' ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Layanan
                        <span><i class="ti-angle-down"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown dropdown-submenu dropleft">
                            <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rawat Inap</a>

                            <ul class="dropdown-menu" aria-labelledby="dropdown0501">
                                <li><a class="dropdown-item" href="/layanan/UGD-24-Jam">UGD 24 Jam</a></li>
                                <li><a class="dropdown-item" href="/layanan/VK-(Ruang-Bersalin)-24-Jam">VK (Ruang
                                        Bersalin) 24 Jam</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu dropleft">
                            <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rawat Jalan</a>

                            <ul class="dropdown-menu" aria-labelledby="dropdown0501">
                                <li><a class="dropdown-item" href="/layanan/Loket">Loket Pendaftaran</a></li>
                                <li><a class="dropdown-item" href="/layanan/BP-1-(Umum)">BP 1 (Umum)</a></li>
                                <li><a class="dropdown-item" href="/layanan/BP-2-(Lansia)">BP 1 (Lansia)</a></li>
                                <li><a class="dropdown-item" href="/layanan/KIA">KIA</a></li>
                                <li><a class="dropdown-item" href="/layanan/Laboratorium">Laborat</a></li>
                                <li><a class="dropdown-item" href="/layanan/MTBS">MTBS</a></li>
                                <li><a class="dropdown-item" href="/layanan/Gizi-dan-Konseling">Gizi dan konseling</a>
                                </li>
                                <li><a class="dropdown-item" href="/layanan/Gigi-dan-Mulut">Gigi dan mulut</a></li>
                                <li><a class="dropdown-item" href="/layanan/Fisioterapi">Fisioterapi</a></li>
                                <li><a class="dropdown-item" href="/layanan/KB">KB</a></li>
                                <li><a class="dropdown-item" href="/layanan/TB">TB</a></li>
                                <li><a class="dropdown-item" href="/layanan/Apotek">Apotek</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ $active === 'dokumen' ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="/layanan/dokumen">Dokumen
                    </a>
                </li>
                <li class="nav-item dropdown @@pages {{ $active === 'aduan' ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Aduan & SKM
                        <span><i class="ti-angle-down"></i></span>
                    </a>
                    <!-- Dropdown list -->
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item @@pengaduan"
                                href="/layanan-pengaduan-saran">Layanan
                                Pengaduan
                                Saran</a>
                        </li>
                        <li><a class="dropdown-item @@skm"
                                href="/survey-kepuasan-masyarakat">Survey Kepuasan
                                Masyarakat
                                (SKM)</a></li>
                    </ul>
                </li>
                <li class="nav-item @@contact {{ $active === 'contact' ? 'active' : '' }}">
                    <a class="nav-link" href="/contact">Hubungi Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
