@extends('layout.main')

<link rel="stylesheet" href="css/index.css" />

<body>
    <nav class="breadcrumb" aria-label="breadcrumb" style="margin-top: 6%">
        <ul>
            <li><a href="/">Beranda</a></li>
            <li class="activess" aria-current="page">SOP</li>
        </ul>
    </nav>
    <hr>

    <div style="text-align: center">
        <div class="content">
            <div class="title-container" style="margin-left: 250px">
                <img src="{{ asset('img/logoppks.png') }}" alt="Logo" class="logo" />
                <h1 class="title">SOP PENANGANAN LAPORAN KEKERASAN SEKSUAL</h1>
            </div>
            <hr class="separator"
                style="max-width: 900px; margin-left: 245px; margin-top: 5px; border-top: 2px solid #007663" />
            <img src="{{ asset('img/coba1.png') }}" alt="" />
        </div>
    </div>
    @include('main.footer')
</body>
