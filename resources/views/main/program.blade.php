@extends('layout.main')

<link rel="stylesheet" href="css/index.css" />

<body>
    <nav class="breadcrumb" aria-label="breadcrumb" style="margin-top: 6%">
        <ul>
            <li><a href="/">Beranda</a></li>
            <li class="activess" aria-current="page">Program</li>
        </ul>
    </nav>
    <hr class="separator" />
    <div class="containerw">
        <div class="buttons">
            <button class="button active" id="calendarButton">Kalender Kegiatan</button>
            <button class="button" id="programButton">Program Kegiatan</button>
        </div>
        <div id="calendar-section" class="section">
            <h2 style="text-align: center">Kalender Rencana Kegiatan Satgas UKDW</h2>
            <img src="{{ asset('img/kalender.jpg') }}" alt="Calendar" class="calendar-image" />
            <div class="col" style="margin-left: 150px">
                <div style="display: flex; align-items: center; margin-bottom: 10px">
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
                <div style="display: flex; align-items: center; margin-bottom: 10px">
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
                <div style="display: flex; align-items: center; margin-bottom: 10px">
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
        <div id="program-section" class="section hidden">
            <h2 style="text-align: center; margin-bottom: 35px;"><b>Program Kegiatan</b></h2>
            <div class="program-card">
                <a href="{{ route('program.detail', ['id' => 1]) }}" style="text-decoration:none; color:#04372E">
                    <h3>Judul Program Kegiatan 1</h3>
                    <p>Deskripsi singkat tentang program kegiatan 1.</p>
                </a>
            </div>
            <div class="program-card">
                <a href="{{ route('program.detail', ['id' => 2]) }}" style="text-decoration:none; color:#04372E">
                    <h3>Judul Program Kegiatan 2</h3>
                    <p>Deskripsi singkat tentang program kegiatan 2.</p>
                </a>
            </div>
            <div class="program-card">
                <a href="{{ route('program.detail', ['id' => 3]) }}" style="text-decoration:none; color:#04372E">
                    <h3>Judul Program Kegiatan 3</h3>
                    <p>Deskripsi singkat tentang program kegiatan 3.</p>
                </a>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("calendarButton").addEventListener("click", function() {
            document.getElementById("calendar-section").classList.remove("hidden");
            document.getElementById("program-section").classList.add("hidden");
            document.getElementById("calendarButton").classList.add("active");
            document.getElementById("programButton").classList.remove("active");
        });

        document.getElementById("programButton").addEventListener("click", function() {
            document.getElementById("calendar-section").classList.add("hidden");
            document.getElementById("program-section").classList.remove("hidden");
            document.getElementById("calendarButton").classList.remove("active");
            document.getElementById("programButton").classList.add("active");
        });
    </script>
    @include('main.footer')
</body>
