@extends('layout.main')
<link rel="icon" href="{{ asset('img/logoukdw.png') }}" type="image/icontype" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<link rel="stylesheet" href="css/index.css" />
<style>
    .pdf-container {
        margin-top: 3%;
    }

    .pdf-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        border: 3px solid #000000;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 20px;
        margin-left: 10%;
        width: 80%;
    }

    .pdf-item i {
        font-size: 50px;
        /* Ukuran ikon */
        color: #000000;
        /* Warna ikon */
    }

    .pdf-item p {
        margin-left: 3%;
        flex-grow: 1;
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

    .download-btn i {
        font-size: 16px;
        color: aliceblue
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
        <h1 style="text-align: center; color:#007663">Materi Penting tentang Pencegahan dan Penanganan Kekerasan Seksual
        </h1><br><br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="pdf-container">
                    <div class="pdf-item">
                        <i class="fa-solid fa-file-pdf"></i>
                        <p>Anggota Satuan Tugas PPKS UKDW</p>
                        <a href="#" class="download-btn"><i class="fa-solid fa-download"></i> Download</a>
                    </div>

                    <div class="pdf-item">
                        <i class="fa-solid fa-file-pdf"></i>
                        <p>Buku Panduan Kebijakan Anti Kekerasan Seksual UKDW</p>
                        <a href="#" class="download-btn"><i class="fa-solid fa-download"></i> Download</a>
                    </div>

                    <div class="pdf-item">
                        <i class="fa-solid fa-file-pdf"></i>
                        <p>Media Sosial</p>
                        <a href="#" class="download-btn"><i class="fa-solid fa-download"></i> Download</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('main.footer')
</body>
