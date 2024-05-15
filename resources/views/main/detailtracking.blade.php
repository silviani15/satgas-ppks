@extends('layout.main')
<link rel="icon" href="{{ asset('img/logoukdw.png') }}" type="image/icontype" />
<link rel="stylesheet" href="css/index.css" />

<style>
    .pdf-container {
        margin-top: 3%;
    }

    .pdf-item {
        width: 80%;
        border: 3px solid #000000;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 10px;
        margin-left: 10%;
        /* Sesuaikan margin kiri sesuai kebutuhan */
    }

    .pdf-item p {
        margin-left: 0;
        /* Hilangkan margin kiri */
        margin-top: 5px;
        /* Atur margin atas */
    }

    .pdf-item p:first-child {
        margin-bottom: 5px;
        /* Atur margin bawah untuk paragraf pertama */
    }


    .pdf-item i {
        font-size: 50px;
        color: #007663;
    }

    .download-btn {
        text-align: center;
        padding: 5px 10px;
        background-color: #007663;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        margin-left: 50px;
    }
</style>

<body>
    <nav class="breadcrumb" aria-label="breadcrumb" style="margin-top: 6%">
        <ul>
            <li><a href="/">Beranda</a></li>
            <li><a href="/tracking">Tracking Aduan</a></li>
            <li class="activess" aria-current="page">Detail Tracking Aduan</li>
        </ul>
    </nav>
    <hr class="separator" />

    <div class="container">

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div style="text-align: center">
            <div class="content">
                <div class="title-container">
                    <h1 class="title">Detail Tracking Aduan</h1>
                </div>
                <hr class="separator"
                    style="max-width: 900px; margin-left: 20%; margin-top: 5px; border-top: 2px solid #007663" />
            </div>
            <div style="text-align: left; margin-top: 5%;">
                <div class="content" style="margin-left: 10%">
                    @if (isset($kode_tracking))
                        <p>Kode Aduan : <span style="color: #007663; font-size:20px"><b>{{ $kode_tracking }}</b></span>
                        </p>
                        <hr class="separator"
                            style="max-width: 77%; margin-left: 3px; margin-top: 5px; border-top: 2px solid #007663" />
                        <p>Status Aduan : <span
                                style="color: #007663; font-size:20px"><b>{{ $status_laporan }}</b></span>
                        </p>
                        <hr class="separator"
                            style="max-width: 77%; margin-left: 3px; margin-top: 5px; border-top: 2px solid #007663" />
                    @else
                        <p>Data tidak ditemukan.</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="content">
            <div class="title-container">
                <h3 style="margin-left: 10%; margin-top:5%">Tahapan Aduan</h3>
            </div>
            <hr class="separator"
                style="max-width: 900px; margin-left: 10%; margin-top: 5px; border-top: 2px solid #007663" />
        </div>

        <div class="pdf-container" style="text-align: justify;">
            @forelse ($tanggapan as $tanggap)
                <div class="pdf-item" style="font-size: 16px">
                    {{-- <p><strong>Tanggal Tanggapan : </strong> {{ $tanggap->tgl_tanggapan }}</p> --}}
                    <p><strong>Tanggal Tanggapan : </strong> {{ date('d-m-Y', strtotime($tanggap->tgl_tanggapan)) }}</p>
                    <p>{{ $tanggap->tanggapan }}</p>
                </div>
            @empty
                <div class="pdf-item" style="font-size: 16px">
                    <p>Tidak ada tanggapan untuk pengaduan ini.</p>
                </div>
            @endforelse
        </div>


        <br><br>
    </div>
    @include('main.footer')
</body>
