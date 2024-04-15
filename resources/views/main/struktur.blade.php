@extends('layout.main')

<link rel="stylesheet" href="css/index.css" />

<body>
    <nav class="breadcrumb" aria-label="breadcrumb" style="margin-top: 6%">
        <ul>
            <li><a href="/">Beranda</a></li>
            <li class="activess" aria-current="page">Struktur Organisasi</li>
        </ul>
    </nav>
    <hr>

    <div style="text-align: center;">
        <h1>Struktur Organisasi</h1>
        <img src="{{ asset('img/coba1.png') }}" alt="">
    </div><br>
    @include('main.footer')
</body>
