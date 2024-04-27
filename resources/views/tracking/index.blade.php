@extends('layout.main')
<link rel="icon" href="{{ asset('img/logoukdw.png') }}" type="image/icontype" />

<body>

    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach

        </ul>
    @endif
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
                <h1><b>Aduan Online</b></h1>
            </div>
        </section>
        <main id="main">
            <section class="">
                <div class="container mb-4">
                    <form action="#" method="POST">
                        <input type="hidden" name="_token" value="">
                        <div class="form-group" style="text-align: center">
                            <p><img src="{{ asset('img/logoppks.png') }}" alt="logo" width="50%"></p>
                            <h2>Terimakasih telah melakukan pelaporan kepada tim Satgas PPKS UKDW.</h2>
                            <h3>Aduan Anda telah terkirim dan akan segera kami tindaklanjuti.</h3>
                            <p>Kode permohonan anda adalah <strong>{{ $kode_tracking }}</strong>. Mohon untuk mencatatat kode tersebut. </p>
                            <p>Gunakan tombol berikut untuk memantau progres dari aduan anda</p>
                            <div class="float">
                                <a href="/tracking" class="btn" type="submit" style="background-color: #007663; color:#EBFEFE">Tracking Aduan</a>
                            </div>
                            <br><div class="float">
                                <a href="/" class="btn" type="submit" style="background-color: #007663; color:#EBFEFE">Kembali ke halaman depan</a>
                            </div>
                        </div>
                    </form><br>
                </div>
            </section>
        </main>
        @include('main.footer')
    </section>
</body>
