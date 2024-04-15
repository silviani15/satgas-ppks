@extends('layout.main')
<link rel="icon" href="{{ asset('img/logoukdw.png') }}" type="image/icontype" />

<link rel="stylesheet" href="css/index.css" />
<!------------------------------------------- A R T I C L E ------------------------------------------------------>
<article>
    <!-- Carousel Section -->
    <section>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/coba1.png') }}" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/coba2.png') }}" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/coba3.png') }}" class="d-block w-100" alt="..." />
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
                        <div class="col-lg-6 pt-4 pt-lg-0 pb-4 pt-lg-0">
                            <h3><b>LAPOR SATGAS PPKS</b></h3>
                            <hr class="hr" />
                            <p style="text-align: justify;">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dalam konteks Satgas Pencegahan dan Penanganan Kekerasan Seksual di Universitas Kristen Duta Wacana, kami menegaskan pentingnya untuk memahami bahwa meskipun UUD 1945 menegaskan kemerdekaan sebagai hak semua bangsa, penjajahan modern masih berlangsung melalui relasi kuasa yang timpang. Kekerasan seksual di lingkungan perguruan tinggi menjadi bukti nyata dari penjajahan ini, yang menghambat pengembangan ilmu dengan aman. Namun, dengan adanya Permendikbud Ristek No. 30 Tahun 2021, pemerintah menunjukkan keseriusannya dalam melindungi civitas academica dan menciptakan lingkungan kampus yang aman dari kekerasan seksual. Oleh karena itu, Universitas Kristen Duta Wacana harus menunjukkan sikap tegas terhadap kekerasan seksual sebagai institusi pendidikan tinggi Kristen. UKDW berkomitmen dalam mencegah serta menangani tindakan kekerasan seksual.</p>
                            <a href="/pengantar" class="btn btn-warning scrollto">Baca Selengkapnya...</a>
                            <a href="#" class="btn btn-warning scrollto" target="__blank">Petunjuk Pelaporan</a>
                            <a href="/laporkan" class="btn btn-danger scrollto">Laporkan disini !</a>
                        </div>
                        <div class="col-lg-6 text-center">
                            <img src="{{ asset('img/logoppks.png') }}" class="img-fluid" alt=""
                                width="60%" />
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
                            <div class="card" style="width: 18rem; margin-left: 50px">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/logoukdw.png') }}" class="card-img" alt="..." />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem; margin-left: 50px">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/logoukdw.png') }}" class="card-img" alt="..." />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem; margin-left: 50px">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/logoukdw.png') }}" class="card-img" alt="..." />
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Agenda -->
                        <div class="col">
                            <div class="section-subheading fs-2"><b>Agenda</b></div>
                            <hr class="hr" />
                            <div style="display: flex; align-items: center; margin-bottom: 8px">
                                <div style="padding-left: 55px">
                                    <div class="green-circle">
                                        <div class="circle" href="#">
                                            <h1><b>10</b></h1>
                                            <p>Juni<br />2024</p>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding-left: 10px">
                                    <div class="agenda">
                                        <div style="text-decoration: none; color: #007663">
                                            <h1>Lorem ipsum dolor sit amet.</h1>
                                            <p style="line-height: 0px"><i class="fa fa-map-marker"></i> Lorem ipsum
                                                dolor sit amet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display: flex; align-items: center; margin-bottom: 8px">
                                <div style="padding-left: 55px">
                                    <div class="green-circle">
                                        <div class="circle" href="#">
                                            <h1><b>10</b></h1>
                                            <p>Juni<br />2024</p>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding-left: 10px">
                                    <div class="agenda">
                                        <div style="text-decoration: none; color: #007663">
                                            <h1>Lorem ipsum dolor sit amet.</h1>
                                            <p style="line-height: 0px"><i class="fa fa-map-marker"></i> Lorem ipsum
                                                dolor sit amet.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="display: flex; align-items: center; margin-bottom: 8px">
                                <div style="padding-left: 55px">
                                    <div class="green-circle">
                                        <div class="circle" href="#">
                                            <h1><b>10</b></h1>
                                            <p>Juni<br />2024</p>
                                        </div>
                                    </div>
                                </div>
                                <div style="padding-left: 10px">
                                    <div class="agenda">
                                        <div style="text-decoration: none; color: #007663">
                                            <h1>Lorem ipsum dolor sit amet.</h1>
                                            <p style="line-height: 0px"><i class="fa fa-map-marker"></i> Lorem ipsum
                                                dolor sit amet.</p>
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
    <div class="section-subheading fs-2" style="text-align: center"><b><hr>Materi <hr></b></div>
    <div class="container">
        <div class="row">
            <div class="d-flex gap-4 flex-row justify-content-between">
                <div class="col">
                    <div class="card"
                        style="width: 28rem; margin-left: 150px; margin-top: 50px; border: black solid">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ asset('img/logoukdw.png') }}" class="card-img" alt="..." />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 16px">Peraturan Perundang-Undangan dan Kebijakan UKDW</h5>
                                    <a href="#" class="btn"
                                        style="margin-left: 10px; margin-top: 20px; background-color:#007663; color:#EBFEFE">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card"
                        style="width: 28rem; margin-left: 150px; margin-top: 35px; border: black solid">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{ asset('img/logoukdw.png') }}" class="card-img" alt="..." />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2 class="card-title" style="font-size: 25px">Materi Pelatihan</h2><br>
                                    <a href="#" class="btn" style="margin-left: 10px; background-color:#007663; color:#EBFEFE">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('img/logoppks.png') }}" class="img-fluid"
                        style="float: right; margin-right: 150px; margin-top: -50px" alt="" width="60%" />
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
                <img src="{{ asset('img/logoppks.png') }}" class="img-fluid" alt="" width="50%" />
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 pb-4 pt-lg-0">
                <h3 style="margin-top: 15px"><b>Video Edukasi Satgas PPKS</b></h3>
                <hr class="hr" />
                <p style="text-align: justify">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor, sit amet consectetur adipisicing
                    elit.
                    Beatae doloremque, molestiae vitae non dolore esse, officiis iusto quas voluptates maxime
                    dolorum
                    eos quos velit. Nobis ea vel
                    magnam tenetur temporibus optio vero fugiat iste dolores ad dolorem totam illo eius
                    reprehenderit
                    vitae rerum eum, quas sit. Blanditiis, consequuntur? Nobis natus doloremque consequatur modi
                    nesciunt possimus asperiores,
                    maxime iure repellendus blanditiis reprehenderit obcaecati labore quam fugit eligendi minus
                    quisquam
                    inventore aperiam illo ratione veritatis ipsam a.
                </p>
                <a href="#" class="btn btn-warning scrollto">Kanal Youtube  <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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
                        <img src="{{ asset('img/logoukdw.png') }}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Lapor Diri</h5>
                            <p class="card-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dengan melaporkan diri, Satgas Pencegahan dan Penanganan Kekerasan Seksual di Universitas Kristen Duta Wacana akan lebih optimal dalam memberikan pelayanan dan perlindungan kepada Anda. Bagi Anda yang memerlukan bantuan atau mengalami kekerasan seksual, cukup melaporkan diri melalui portal yang disediakan oleh Satgas, dan bukti lapor diri akan segera diproses. Portal ini memfasilitasi pelaporan kejadian, permintaan bantuan, serta proses tindak lanjut yang diperlukan.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('img/logoukdw.png') }}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Pelayanan</h5>
                            <p class="card-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Satgas Pencegahan dan Penanganan Kekerasan Seksual di Universitas Kristen Duta Wacana menyediakan layanan mandiri bagi korban dan individu terkait. Ini mencakup legalisasi, surat keterangan, serta pencatatan dan pelaporan. Anda dapat dengan mudah melacak status layanan ini melalui portal Satgas PPKS UKDW.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('img/logoukdw.png') }}" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Pengaduan</h5>
                            <p class="card-text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anda dapat dengan mudah melaporkan kasus kekerasan seksual atau memberikan pengaduan terhadap pelayanan yang Anda terima melalui fasilitas lapor diri di portal yang disediakan oleh Satgas Pencegahan dan Penanganan Kekerasan Seksual di Universitas Kristen Duta Wacana. Selain itu, Anda dapat dengan mudah melacak dan mengetahui status penanganan pengaduan yang telah Anda ajukan melalui portal tersebut.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('main.footer')
</section>
