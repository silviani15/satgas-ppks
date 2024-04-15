@extends('layout.main')
@section('title', 'Materi Satgas PPKS UKDW')
<link rel="stylesheet" href="css/index.css" />

<body>
    <nav class="breadcrumb" aria-label="breadcrumb" style="margin-top: 6%">
        <ul>
            <li><a href="/">Beranda</a></li>
            <li class="activess" aria-current="page">Materi</li>
        </ul>
    </nav>
    <hr class="separator" />

    <h1 class="page-title" style="text-align: center"><b>Materi Satgas PPKS UKDW</b></h1>
    <div class="card-container" style="text-align: center;">
        <div class="card">
            <div class="card-content" style="padding: 7px">
                <img src="{{ asset('img/pdf.png') }}" alt="Gambar PDF" class="pdf-image"
                    style="background-color: #EBFEFE" />
                <h1 class="pdf-title">SK & Kebijakan UKDW</h1>
                <p>SK & Kebijakan UKDW tentang Pencegahan dan Penanganan Kekerasan Seksual di Lingkungan UKDW</p>
                <a href="{{ route('openPdf', 'sk_kebijakan.pdf') }}" class="detail-btn" target="_blank">Detail</a>
            </div>
        </div>
        <div class="card">
            <div class="card-content" style="padding: 7px">
                <img src="{{ asset('img/pdf.png') }}" alt="Gambar PDF" class="pdf-image"
                    style="background-color: #EBFEFE" />
                <h1 class="pdf-title">Peraturan Perundangan</h1>
                <p>Peraturn Perundang-undangan tentang Pencegahan dan Penanganan Kekerasan Seksual di Lingkungan
                    Perguruan Tinggi</p>
                <a href="{{ route('openPdf', 'peraturan_perundangan.pdf') }}" class="detail-btn" target="_blank">Detail</a>
            </div>
        </div>
        <div class="card">
            <div class="card-content" style="padding: 7px">
                <img src="{{ asset('img/pdf.png') }}" alt="Gambar PDF" class="pdf-image"
                    style="background-color: #EBFEFE" />
                <h1 class="pdf-title">Materi Penting Lainnya</h1>
                <p>Kumpulan Materi Penting tentang Pencegahan dan Penanganan Kekerasan Seksual</p>
                <a href="{{ route('detailmateri') }}" class="detail-btn">Detail</a>
            </div>
        </div>
    </div><br>
    @include('main.footer')
</body>
