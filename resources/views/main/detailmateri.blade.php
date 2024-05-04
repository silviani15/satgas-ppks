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
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
        margin-left: 10%;
    }

    .pdf-item img {
        width: 50px;
        height: 50px;
    }

    .pdf-item p {
        margin-left: 3%;
        flex-grow: 1;
        border-right: 15px;
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
            <li><a href="/materi">Materi</a></li>
            <li class="activess" aria-current="page">Detail Materi</li>
        </ul>
    </nav>
    <hr class="separator" />
    <section id="services">
        <h1 style="text-align: center">Materi Penting tentang Pencegahan dan Penanganan Kekerasan Seksual</h1><br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="pdf-container">
                    <div class="pdf-item">
                        <img src="{{ asset('img/pdf.svg') }}" alt="PDF Icon" />
                        <p>Anggota Satuan Tugas PPKS UKDW</p>
                        <a href="#" class="download-btn">Download</a>
                    </div>
                    <div class="pdf-item">
                        <img src="{{ asset('img/pdf.svg') }}" alt="PDF Icon" />
                        <p>Buku Panduan Kebijakan Kebijakan Anti Kekerasan Seksual UKDW</p>
                        <a href="#" class="download-btn">Download</a>
                    </div>
                    <div class="pdf-item">
                        <img src="{{ asset('img/pdf.svg') }}" alt="PDF Icon" />
                        <p>Media Sosial</p>
                        <a href="#" class="download-btn">Download</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('main.footer')
</body>
