<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                    <span data-feather="folder"></span>
                    All Post
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" aria-current="page"
                    href="/dashboard/categories">
                    <span data-feather="grid"></span>
                    Post Categories
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/pengaduan-dan-saran') ? 'active' : '' }}"
                    href="/dashboard/pengaduan-dan-saran">
                    <span data-feather="mail"></span>
                    Message
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/dashboard/dokumen">
                    <span data-feather="paperclip"></span>
                    Dokumen
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/dashboard/galeri">
                    <span data-feather="image"></span>
                    Galeri
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/dashboard/profil/{{ 'sertifikat' }}">
                    <span data-feather="file-text"></span>
                    Sertifikat
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/dashboard/profil/{{ 'akreditasi' }}">
                    <span data-feather="check-circle"></span>
                    Akreditasi
                </a>
            </li>
        </ul>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link " href="/dashboard/profil/{{ 'visi-misi' }}">
                    <span data-feather="file-minus"></span>
                    Visi Misi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard/profil/{{ 'tata-nilai' }}">
                    <span data-feather="file-minus"></span>
                    Tata Nilai
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/message*') ? 'active' : '' }}"
                    href="/dashboard/profil/{{ 'motto' }}">
                    <span data-feather="file-minus"></span>
                    Motto
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/message*') ? 'active' : '' }}"
                    href="/dashboard/profil/{{ 'maklumat pelayanan' }}">
                    <span data-feather="file-minus"></span>
                    Maklumat Pelayanan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/message*') ? 'active' : '' }}"
                    href="/dashboard/profil/{{ 'struktur organisasi' }}">
                    <span data-feather="file-minus"></span>
                    Struktur Organisasi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/profil') ? 'active' : '' }}"
                    href="/dashboard/profil/{{ 'about' }}">
                    <span data-feather="file-minus"></span>
                    Tentang
                </a>
            </li>
        </ul>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/dashboard/layanan/ranap') ? 'active' : '' }}"
                    href="/dashboard/layanan/">
                    <span data-feather="clipboard"></span>
                    Layanan
                </a>
            </li>
        </ul>
    </div>
</nav>
