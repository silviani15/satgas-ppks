@extends('layout.main')

<body>
    <nav class="breadcrumb" aria-label="breadcrumb" style="margin-top: 6%">
        <ul>
            <li><a href="/">Beranda</a></li>
            <li class="activess" aria-current="page">Tracking Aduan</li>
        </ul>
    </nav>

    <hr />
    <section>
        <section id="hero" class="d-flex flex-column justify-content-center align-items-center"
            style="height: 15vh !important;">
            <div class="container text-center text-md-left" data-aos="fade-up">
                <h1><b>Tracking Status Aduan</b></h1>
            </div>
        </section>
        <main id="main">
            <section class="">
                <div class="container mb-4">
                    <form action="#" method="POST">
                    <input type="hidden" name="_token" value="">
                        <div class="form-group">
                            <label for="">Silakan masukkan kode aduan yang anda dapatkan saat melakukan
                                pelaporan. Kode
                                ini dapat pula ada dapatkan pada email yang kami kirim saat selesai mengajukan
                                aduan.</label>
                            <input type="text" class="form-control mt-2" placeholder="Masukan kode aduan anda"
                                name="kode_aduan">
                        </div>
                        <br>
                        <div class="float-end">
                            <a href="/tracking/detailtracking" class="btn btn-primary" type="submit">Cari aduan</a>
                        </div>
                    </form><br>
                </div>
            </section>
        </main>
        @include('main.footer')
    </section>
</body>
