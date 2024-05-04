@extends('layout.main')

<link rel="stylesheet" href="css/index.css" />

<body>
    <br><br><br><br>
    <div style="text-align: center">
        <div class="content">
            <div class="title-container" style="margin-left: 250px">
                <img src="{{ asset('img/logoppks.png') }}" alt="Logo" class="logo" />
                <h1 class="title">SOP PENANGANAN LAPORAN KEKERASAN SEKSUAL</h1>
            </div>
            <hr class="separator"
                style="max-width: 1000px; margin-left: 245px; margin-top: 5px; border-top: 2px solid #007663" />
            <img src="{{ asset('img/profil/sop.png') }}" alt="Struktur Organisasi">
        </div>
    </div><br>
    @include('main.footer')
</body>
