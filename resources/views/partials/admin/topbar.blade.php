<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Dashboard</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="{{ route('signout') }}"
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Sign
                out <span data-feather="log-out"></span> </a>
            <form id="logout-form" action="{{ route('signout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</header>
