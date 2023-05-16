<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
    <div class="container">
        <a class="navbar-brand" href="index.html"><img src="{{ URL::asset('images/Frame.png') }}" alt="logo"
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
                        <li><a class="dropdown-item @@struktur" href="/maklumat-pelayanan">Maklumat Pelayanan</a>
                        </li>
                        <li><a class="dropdown-item @@sk" href="/struktur-organisasi">Struktur Organisasi</a>
                        </li>
                        <li><a class="dropdown-item @@sop" href="/tentang-puskesmas">Tentang Puskesmas</a></li>
                        <li><a class="dropdown-item @@galeri" href="/galeri">Galeri</a></li>
                    </ul>
                </li>
                <li class="nav-item @@layanan {{ $active === 'faq' ? 'active' : '' }}">
                    <a class="nav-link" href="">Layanan</a>
                </li>
                <li class="nav-item dropdown @@pages {{ $active === 'contact' ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Aduan & SKM
                        <span><i class="ti-angle-down"></i></span>
                    </a>
                    <!-- Dropdown list -->
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item @@pengaduan" href="/layanan-pengaduan-saran">Layanan Pengaduan
                                Saran</a>
                        </li>
                        <li><a class="dropdown-item @@skm" href="/survey-kepuasan-masyarakat">Survey Kepuasan
                                Masyarakat
                                (SKM)</a></li>
                    </ul>
                </li>
                <li class="nav-item @@contact {{ $active === 'partner' ? 'active' : '' }}">
                    <a class="nav-link" href="/contact">Hubungi Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
