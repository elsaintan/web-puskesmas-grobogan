<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
        </ul>
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
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Profil</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}"
                    href="/dashboard/profil/{{ 'visi' }}">
                    <span data-feather="folder"></span>
                    Visi Misi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="">
                    <span data-feather="grid"></span>
                    Akreditasi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/message*') ? 'active' : '' }}"
                    href="/dashboard/profil/{{ 'motto' }}">
                    <span data-feather="mail"></span>
                    Motto
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/message*') ? 'active' : '' }}"
                    href="/dashboard/profil/{{ 'maklumat pelayanan' }}">
                    <span data-feather="mail"></span>
                    Maklumat Pelayanan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/message*') ? 'active' : '' }}"
                    href="/dashboard/profil/{{ 'struktur organisasi' }}">
                    <span data-feather="mail"></span>
                    Struktur Organisasi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/profil') ? 'active' : '' }}"
                    href="/dashboard/profil/{{ 'about' }}">
                    <span data-feather="mail"></span>
                    Tentang
                </a>
            </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Layanan</span>
        </h6>
    </div>
</nav>
