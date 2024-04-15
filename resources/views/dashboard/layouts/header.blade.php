<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/dashboard">
        <img src="{{ asset('/img/logoppks.png') }}" alt="Logo" class="img-fluid" width="20" height="10" style="background: white">
        <span class="align-middle mt-3">Satgas PPKS</span>
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    {{-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> --}}

    <button type="button" class="btn btn-dark position-relative" style="margin-left: 74%">
        <i class="fa-solid fa-bell" style="margin-top: 13px"></i>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
            style="margin-top: 11px">
            99+
            <span class="visually-hidden">unread messages</span>
        </span>
    </button>


    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form id="logoutDash" action="/logout" method="post">
                @csrf
                <button type="button" class="nav-link px-3 bg-dark border-0" onclick="confirmLogout()">Logout<span data-feather="log-out"></span></button>
            </form>
            
            <script>
                function confirmLogout() {
                    if (confirm("Apakah Anda yakin ingin keluar?")) {
                        document.getElementById("logoutDash").submit();
                    }
                }
            </script>



        </div>
    </div>
</header>
