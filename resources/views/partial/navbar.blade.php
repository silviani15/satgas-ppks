<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>


<nav class="navbar navbar-expand-lg bg-body-tertiary custom-navbar mx-auto">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand" href="/" style="color: #EBFEFE">
            <img src="{{ asset('img/a.png') }}" alt="Logo" width="45" height="45" />PPKS UKDW</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a style="color: #EBFEFE" class="nav-link {{ $active === 'Satgas PPKS UKDW' ? 'active' : '' }}"
                        href="/">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link {{ $active === 'profil' ? 'active' : '' }} dropdown-toggle" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #EBFEFE"> Profil
                    </a>
                    <ul class="dropdown-menu" style="background-color: #007663; margin-top:12px;">
                        <li><a class="dropdown-item" href="/pengantar" style="color: #EBFEFE">Pengantar</a></li>
                        <li><a class="dropdown-item" href="/filosofi" style="color: #EBFEFE">Filosofi Logo</a></li>
                        <li><a class="dropdown-item" href="/struktur" style="color: #EBFEFE">Struktur Organisasi</a>
                        </li>
                        <li><a class="dropdown-item" href="/sop" style="color: #EBFEFE">SOP</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'Artikel Satgas PPKS' ? 'active' : '' }}" href="/artikel"
                        style="color: #EBFEFE">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'Program Satgas' ? 'active' : '' }}" href="/program"
                        style="color: #EBFEFE">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ $active === 'Laporkan!' ? 'active' : '' }}" href="/laporkan"
                        style="color: #ff0000; "><b>LAPORKAN!</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'Tracking Aduan' ? 'active' : '' }}" href="/tracking"
                        style="color: #EBFEFE">Tracking
                        Aduan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'Materi Satgas' ? 'active' : '' }}" href="/materi"
                        style="color: #EBFEFE">Materi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'Hubungi Kami' ? 'active' : '' }}" href="/hubungi"
                        style="color: #EBFEFE">Hubungi
                        Kami</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ $active === 'Categories' ? 'active' : '' }}" href="/categories">Categories</a>
                </li> --}}
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="color: #EBFEFE">
                            Welcome, {{ auth()->user()->username }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i>
                                    My Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <form id="logoutForm" action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"
                                    onclick="return confirm('Apakah Anda yakin ingin keluar?')"><i
                                        class="bi bi-box-arrow-right"></i> Logout</button>
                            </form>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'Login Admin' ? 'active' : '' }}" href="/login"><img
                                src="{{ asset('img/login.png') }}" alt="Logo" width="30" height="30"></a>
                    </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>
