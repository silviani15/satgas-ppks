@extends('layout.main')

<body>
    <br><br><br><br>
    <section>
        <section id="hero" class="d-flex flex-column justify-content-center align-items-center"
            style="height: 15vh !important;">
            <div class="container text-center text-md-left" data-aos="fade-up">
                <h1><b>Tracking Status Aduan</b></h1>
            </div>
        </section>
        <main id="main">
            <section class="container">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
    
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="container mb-4">
                    <form action="/tracking/detailtracking" method="GET">
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
                            <button class="btn btn-primary" type="submit">Cari aduan</button>
                        </div>
                    </form><br>
                </div>
            </section>
        </main>
        @include('main.footer')
    </section>
</body>
