@extends('layout.main')
<link rel="icon" href="{{ asset('img/logoukdw.png') }}" type="image/icontype" />
<link rel="stylesheet" href="css/index.css" />

<body>
    <nav class="breadcrumb" aria-label="breadcrumb" style="margin-top: 6%">
        <ul>
            <li><a href="/">Beranda</a></li>
            <li><a href="/program">Program</a></li>
            <li class="activess" aria-current="page">Detail Program</li>
        </ul>
    </nav>
    <hr class="separator" />
    <section id="services">
        <h1 style="text-align: center">Detail Program</h1><br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <table class="table table-bordered">
                        <tr>
                            <td width="20%">Penyelenggara</td>
                            <td width="2%">:</td>
                            <td>{{ $program['penyelenggara'] }}</td>
                        </tr>
                        <tr>
                            <td width="20%">Lokasi</td>
                            <td width="2%">:</td>
                            <td>{{ $program['lokasi'] }}</td>
                        </tr>
                        <tr>
                            <td width="20%">Waktu</td>
                            <td width="2%">:</td>
                            <td>{{ $program['waktu'] }}</td>
                        </tr>
                        <tr>
                            <td width="20%">Uraian</td>
                            <td width="2%">:</td>
                            <td>{{ $program['uraian'] }}</td>
                        </tr>
                    </table><br>
                </div>
            </div>
        </div>
    </section>
    @include('main.footer')
</body>
