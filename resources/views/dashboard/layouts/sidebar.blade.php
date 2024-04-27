<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <i class="fa-solid fa-house"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/pengaduan*') ? 'active' : '' }}"
                    href="/dashboard/pengaduan">
                    <i class="fa-solid fa-bullhorn"></i> Semua Pengaduan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/artikel*') ? 'active' : '' }}" href="/dashboard/artikel">
                    <i class="fa-regular fa-file-lines"></i> My Artikel</a>
            </li>
        </ul>

        @unless (auth()->user() && auth()->user()->is_admin === 'petugas')
            @can('admin')
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('dashboard/petugas*') ? 'active' : '' }}" href="/dashboard/petugas">
                            <i class="fa-solid fa-circle-user"></i> Petugas</a>
                    </li>
                </ul>
            @endcan
        @endunless
    </div>
</nav>
