@extends('layout.main')
<link rel="icon" href="{{ asset('img/logoukdw.png') }}" type="image/icontype" />
<head>
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ asset('ppks.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
</head>

<link rel="stylesheet" href="css/index.css" />
<!------------------------------------------- A R T I C L E ------------------------------------------------------>
<article>
    <!-- Carousel Section -->
    <section>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/beranda/1.png') }}" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/beranda/2.png') }}" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/beranda/3.png') }}" class="d-block w-100" alt="..." />
                </div>
            </div>

            <!-- Button prev next -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- About -->
    <section>
        <main id="main" style="margin-top: -22px">
            <section id="about" class="about pt-4 mt-4">
                <div class="container">
                    <div class="row" style="margin-left: 55px">
                        <div class="col-lg-6 pt-4 pt-lg-0 pb-4 pt-lg-0"><br>
                            <h3><b>LAPOR SATGAS PPKS</b></h3>
                            <hr class="hr" />
                            <p style="text-align: justify;">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dalam konteks Satgas Pencegahan dan Penanganan
                                Kekerasan Seksual di Universitas Kristen Duta Wacana, kami menegaskan pentingnya untuk
                                memahami bahwa meskipun UUD 1945 menegaskan kemerdekaan sebagai hak semua bangsa,
                                penjajahan modern masih berlangsung melalui relasi kuasa yang timpang. Kekerasan seksual
                                di lingkungan perguruan tinggi menjadi bukti nyata dari penjajahan ini, yang menghambat
                                pengembangan ilmu dengan aman. Namun, dengan adanya Permendikbud Ristek No. 30 Tahun
                                2021, pemerintah menunjukkan keseriusannya dalam melindungi civitas academica dan
                                menciptakan lingkungan kampus yang aman dari kekerasan seksual. Oleh karena itu,
                                Universitas Kristen Duta Wacana harus menunjukkan sikap tegas terhadap kekerasan seksual
                                sebagai institusi pendidikan tinggi Kristen. UKDW berkomitmen dalam mencegah serta
                                menangani tindakan kekerasan seksual.</p>
                            <a href="/pengantar" class="btn scrollto" style="background: #007663; color: white;">Baca Selengkapnya...</a>
                            <a href="#" class="btn scrollto" style="background: #007663; color: white;" target="__blank">Petunjuk Pelaporan</a>
                            <a href="/laporkan" class="btn btn-danger scrollto">Laporkan disini !</a>
                        </div><br>
                        <div class="col-lg-6 text-center">
                            <img src="{{ asset('img/beranda/pengantar.png') }}" class="img-fluid" alt=""
                                width="70%" />
                        </div>
                    </div>
                </div>
            </section>

            <!-- Kabar Terbaru dan Agenda -->
            <div class="container" style="display: block; margin-top: 20px; margin-bottom:30px">
                <div class="row">
                    <div class="d-flex gap-4 flex-row justify-content-between">
                        <div class="col">
                            <div class="section-subheading fs-2"><b>Kabar Terbaru</b></div>
                            <hr class="hr" />
                            <div class="card" style="width: 30rem; margin-left: 50px">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/beranda/art1.png') }}" class="card-img" alt="..." />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="/artikel" style="text-decoration: none; color:black"><h5 class="card-title">UKDW Gelar Uji Publik Calon Panitia Seleksi Satgas PPKS</h5>
                                            <p class="card-text">Universitas Kristen Duta Wacana (UKDW) Yogyakarta menggelar Uji Publik Calon Panitia Seleksi Satuan Tugas...</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="width: 30rem; margin-left: 50px">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/beranda/art2.png') }}" class="card-img" alt="..." />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="/artikel" style="text-decoration: none; color:black"><h5 class="card-title">UKDW Ikuti Rakornas Pencegahan dan Penanganan Kekerasan Seksual</h5>
                                            <p class="card-text">Satuan Tugas Pencegahan dan Penanganan Kekerasan Seksual (PPKS) Universitas Kristen Duta Wacana...</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="width: 30rem; margin-left: 50px">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/beranda/art3.png') }}" class="card-img" alt="..." />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="/artikel" style="text-decoration: none; color:black"><h5 class="card-title">Peringati International Women’s Day, Satgas UAJY dan UKDW Gelar Seminar</h5>
                                            <p class="card-text">Satuan Tugas Pencegahan dan Penanganan Kekerasan Seksual (Satgas PPKS) Universitas Atma...</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Agenda -->
                        <div class="col">
                            <div class="section-subheading fs-2"><b>Agenda</b></div>
                            <hr class="hr" /><br>
                            <div style="display: flex; align-items: center; margin-bottom: 10px">
                                <div style="padding-left: 55px">
                                    <div class="green-circle">
                                        <div class="circle" href="#">
                                            <h1><b>3</b></h1>
                                            <p>Apr<br />2024</p>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding-left: 10px">
                                    <div class="agenda">
                                        <div style="text-decoration: none; color: #007663">
                                            <h1>IWD screening film bertemakan perempuan >> kolaborasi bersama KSG UKDW
                                            </h1>
                                            <p style="line-height: 0px"><i class="fa fa-map-marker"></i> Universitas
                                                Kristen Duta Wacana</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display: flex; align-items: center; margin-bottom: 10px">
                                <div style="padding-left: 55px">
                                    <div class="green-circle">
                                        <div class="circle" href="#">
                                            <h1><b>4</b></h1>
                                            <p>Apr<br />2024</p>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding-left: 10px">
                                    <div class="agenda">
                                        <div style="text-decoration: none; color: #007663">
                                            <h1>Perayaan International Women's Day</h1>
                                            <p style="line-height: 0px"><i class="fa fa-map-marker"></i> Universitas
                                                Kristen Duta Wacana</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display: flex; align-items: center; margin-bottom: 10px">
                                <div style="padding-left: 55px">
                                    <div class="green-circle">
                                        <div class="circle" href="#">
                                            <h1><b>21</b></h1>
                                            <p>Apr<br />2024</p>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding-left: 10px">
                                    <div class="agenda">
                                        <div style="text-decoration: none; color: #007663">
                                            <h1>Kartini Day</h1>
                                            <p style="line-height: 0px"><i class="fa fa-map-marker"></i> Universitas
                                                Kristen Duta Wacana</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>
</article>

<!--Materi -->
<div class="about">
    <div class="section-subheading fs-2" style="text-align: center"><b>
            <hr>Materi
            <hr>
        </b></div>
    <div class="container">
        <div class="row">
            <div class="d-flex gap-4 flex-row justify-content-between">
                <div class="col">
                    <div class="card"
                        style="width: 28rem; margin-left: 150px; margin-top: 50px; border: black solid">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ asset('img/beranda/mat1.png') }}" class="card-img" alt="..." />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 16px">Peraturan Perundang-Undangan dan
                                        Kebijakan UKDW</h5>
                                    <a href="/materi" class="btn"
                                        style="margin-left: 10px; margin-top: 20px; background-color:#007663; color:#EBFEFE">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card"
                        style="width: 28rem; margin-left: 150px; margin-top: 35px; border: black solid">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ asset('img/beranda/mat2.png') }}" class="card-img" alt="..." />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2 class="card-title" style="font-size: 25px">Materi Pelatihan</h2><br>
                                    <a href="/materi" class="btn"
                                        style="margin-left: 10px; background-color:#007663; color:#EBFEFE">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('img/beranda/mat3.png') }}" class="img-fluid"
                        style="float: right; margin-right: 60px; margin-top: -50px" alt="" width="80%" />
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Video Edukasi -->
<section class="pt-4 mt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center">
                <img src="{{ asset('img/beranda/video.png') }}" class="img-fluid" alt="" width="70%" />
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 pb-4 pt-lg-0">
                <h3 style="margin-top: 15px"><b>Video Edukasi Satgas PPKS</b></h3>
                <hr class="hr" />
                <p style="text-align: justify">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Video edukasi yang disajikan melalui tautan YouTube ini
                    memberikan wawasan mendalam tentang pencegahan dan penanganan kekerasan seksual. Video ini akan
                    mengajarkan cara menangani kekerasan seksual jika terjadi serta langkah-langkah praktis yang harus
                    diambil untuk menghentikannya. Dengan gaya penyampaian yang jelas dan edukatif, video ini mengajak
                    penonton untuk lebih memahami pentingnya pencegahan dan memberikan arahan bagi mereka yang ingin
                    berperan aktif dalam menciptakan lingkungan yang aman dan bebas dari kekerasan seksual.
                </p>
                <a href="https://youtu.be/bPpwv5kohuU?si=WtyvU8nJGPAVVlSI" target="_blank"
                    class="btn scrollto" style="background: #007663; color: white;">Kanal YouTube <i class="fa fa-arrow-right"
                        aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Apa yg kami fasilitasi -->
<section id="about" class="about pt-4 mt-4">
    <div class="section-subheading fs-2" style="text-align: center"><b>Apa yang Kami Fasilitasi?</b></div>
    <div class="container">
        <div class="row">
            <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-bottom: 50px; margin-left: 50px">
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('img/lapor.png') }}" class="card-img-top" alt="..." style="width: 80%;" />
                        <div class="card-body">
                            <h5 class="card-title">Lapor Diri</h5>
                            <p class="card-text" style="font-size: 16px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dengan melaporkan diri,
                                Satgas Pencegahan dan Penanganan Kekerasan Seksual di Universitas Kristen Duta Wacana
                                akan lebih optimal dalam memberikan pelayanan dan perlindungan kepada Anda. Bagi Anda
                                yang memerlukan bantuan atau mengalami kekerasan seksual, cukup melaporkan diri melalui
                                portal yang disediakan oleh Satgas, dan bukti lapor diri akan segera diproses. Portal
                                ini memfasilitasi pelaporan kejadian, permintaan bantuan, serta proses tindak lanjut
                                yang diperlukan.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('img/beranda/fasil2.png') }}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Pelayanan</h5>
                            <p class="card-text" style="font-size: 16px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Satgas Pencegahan dan
                                Penanganan Kekerasan Seksual di Universitas Kristen Duta Wacana menyediakan layanan
                                mandiri bagi korban dan individu terkait. Ini mencakup legalisasi, surat keterangan,
                                serta pencatatan dan pelaporan. Anda dapat dengan mudah melacak status layanan ini
                                melalui portal Satgas PPKS UKDW.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('img/beranda/fasil3.png') }}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Pengaduan</h5>
                            <p class="card-text" style="font-size: 16px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anda dapat dengan mudah
                                melaporkan kasus kekerasan seksual atau memberikan pengaduan terhadap pelayanan yang
                                Anda terima melalui fasilitas lapor diri di portal yang disediakan oleh Satgas
                                Pencegahan dan Penanganan Kekerasan Seksual di Universitas Kristen Duta Wacana. Selain
                                itu, Anda dapat dengan mudah melacak dan mengetahui status penanganan pengaduan yang
                                telah Anda ajukan melalui portal tersebut.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('main.footer')

    <div>
        <script src="{{ asset('/sw.js') }}"></script>
        <script>
            if ("serviceWorker" in navigator) {
                // Register a service worker hosted at the root of the
                // site using the default scope.
                navigator.serviceWorker.register("/sw.js").then(
                    (registration) => {
                        console.log("Service worker registration succeeded:", registration);
                    },
                    (error) => {
                        console.error(`Service worker registration failed: ${error}`);
                    },
                );
            } else {
                console.error("Service workers are not supported.");
            }
        </script>
    </div>


</section>
