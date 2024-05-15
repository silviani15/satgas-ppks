@extends('layout.main')

<link rel="stylesheet" href="css/index.css" />

<body>
    <br><br><br><br>

    <h1 style="text-align: center"><b>Filosofi Logo</b></h1>
    <hr class="hr" />
    <section>
        <main id="main">
            <section class="about pt-4 mt-4" style="background-color: #ffffff !important;">
                <div class="container">
                    <p style="text-align: justify;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Satgas PPKS, singkatan dari Satuan Tugas
                        Pencegahan dan Penanganan Kekerasan Seksual, adalah unit kerja adhoc yang beroperasi di
                        Universitas Kristen Duta Wacana. Pembentukannya didasarkan pada Permendikbudristek Nomor
                        30 Tahun 2021, yang berfokus pada pencegahan dan penanganan kekerasan seksual di
                        lingkungan perguruan tinggi. Satgas ini bertugas memastikan bahwa Universitas Kristen
                        Duta Wacana menjadi tempat yang aman dan mendukung bagi seluruh civitas academica.
                        Sebagai unit adhoc, Satgas PPKS memiliki misi khusus untuk menangani kasus-kasus
                        kekerasan seksual dan memberikan dukungan kepada korban. Mereka juga bertanggung jawab
                        untuk menyusun langkah-langkah pencegahan agar kekerasan seksual tidak terjadi di
                        lingkungan kampus. Keberadaan Satgas PPKS mencerminkan komitmen Universitas Kristen Duta
                        Wacana dalam menciptakan suasana pendidikan yang bebas dari segala bentuk kekerasan
                        seksual.
                    </p>
                </div><br><br>
                <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <img src="{{ asset('img/profil/fil1.png') }}" class="img-fluid" alt="" width="60%" />
                    </div>
                    <div class="col-lg-6 text-center"  >
                        <img src="{{ asset('img/profil/fil2.png') }}" class="img-fluid" alt="" width="60%" />
                    </div>
                </div>
                </div><br><br>
            </section>
        </main>
    </section>
    @include('main.footer')
</body>
