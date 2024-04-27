@extends('layout.main')
<link rel="icon" href="{{ asset('img/logoukdw.png') }}" type="image/icontype" />
<link rel="stylesheet" href="css/index.css" />

<body>
    <nav class="breadcrumb" aria-label="breadcrumb" style="margin-top: 6%">
        <ul>
            <li><a href="/">Beranda</a></li>
            <li><a href="/program">Tracking Aduan</a></li>
            <li class="activess" aria-current="page">Detail Tracking Aduan</li>
        </ul>
    </nav>
    <hr class="separator" />
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
                <p>Kode Aduan : blablabalabla</p>
                <hr class="separator"
                    style="max-width: 77%; margin-left: 3px; margin-top: 5px; border-top: 2px solid #007663" />
            </div>
            <div class="content" style="margin-left: 10%">
                <p>Status Aduan : blabalbalbalba</p>
                <hr class="separator"
                    style="max-width: 77%; margin-left: 3px; margin-top: 5px; border-top: 2px solid #007663" />
            </div>
        </div>
    </div>
    {{-- <div class="container">
        <h1 class="text-center mt-4">Tanggapan</h1>
        <div class="row mt-1">
            <div class="col-md-9 col-xl-12">
                @foreach ($pengaduan as $pengaduan)
                    <div class="card shadow mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <p>{{ $pengaduan->tanggal_pengaduan }}</p>
                                <p class="font-weight-bold text-white bg-success p-1">
                                    @if ($pengaduan->status == 'proses')
                                        <i class="fas fa-check"></i> Divalidasi
                                        elseif ($pengaduan->status == "selesai") @
                                        <i class="fas fa-check-circle"></i> Diverifikasi
                                    @else
                                        Belum divalidasi
                                    @endif
                                </p>
                            </div>
                            <h5>{{ $pengaduan->isi_laporan }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}
    @include('main.footer')
</body>
