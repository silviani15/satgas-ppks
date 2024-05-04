@extends('layout.main')

<link rel="stylesheet" href="css/index.css" />

<body>
    <hr><br><br><br>

    <div style="text-align: center; padding-left: 20px; padding-right: 20px;">
        <h1>Struktur Organisasi</h1><br>
        <img src="{{ asset('img/profil/strukorg.png') }}" alt="Struktur Organisasi"
            style="max-width: 100%; max-height: 400px; object-fit: contain;">
    </div><br>
    @include('main.footer')
</body>
