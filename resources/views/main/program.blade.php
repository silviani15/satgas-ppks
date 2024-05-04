@extends('layout.main')

<link rel="stylesheet" href="css/index.css" />
<style>
    .column {
        flex: 1;
        /* Membagi ruang secara merata */
        max-width: 33%;
        /* Maksimal 1/3 dari total lebar */
        box-sizing: border-box;
        /* Memastikan padding dan border dihitung dalam lebar */
        padding: 10px;
        /* Spasi di antara kolom */
    }

    .three-column {
        display: flex;
        flex-wrap: wrap;
        /* Supaya elemen bisa turun ke baris berikutnya jika terlalu panjang */
    }
</style>

<body>
    <br><br><br>
    <div class="containerw">
        <div class="buttons">
            <button class="button active" id="calendarButton">Kalender Kegiatan</button>
            <button class="button" id="programButton">Program Kegiatan</button>
        </div>
        <div id="calendar-section" class="section">
            <h2 style="text-align: center">Kalender Rencana Kegiatan Satgas UKDW</h2>
            <img src="{{ asset('img/program/kalender.png') }}" alt="Calendar" class="calendar-image" />
            <div class="three-column">
                <div class="column">
                    <div class="col" style="margin-left: 120px">
                        <div style="display: flex; align-items: center; margin-bottom: 10px">
                            <div style="padding-left: 55px">
                                <div class="green-circle">
                                    <div class="circle" href="#">
                                        <h1><b>14</b></h1>
                                        <p>Feb<br />2024</p>
                                    </div>
                                </div>
                            </div>
                            <div style="padding-left: 10px">
                                <div class="agenda">
                                    <div style="text-decoration: none; color: #007663">
                                        <h1>Valentines Day</h1>
                                        <p style="line-height: 0px"><i class="fa fa-map-marker"></i> Universitas Kristen
                                            Duta
                                            Wacana</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display: flex; align-items: center; margin-bottom: 10px">
                            <div style="padding-left: 55px">
                                <div class="green-circle">
                                    <div class="circle" href="#">
                                        <h1><b>1</b></h1>
                                        <p>Mar<br />2024</p>
                                    </div>
                                </div>
                            </div>
                            <div style="padding-left: 10px">
                                <div class="agenda">
                                    <div style="text-decoration: none; color: #007663">
                                        <h1>Zero Discrimination Day</h1>
                                        <p style="line-height: 0px"><i class="fa fa-map-marker"></i> Universitas Kristen
                                            Duta
                                            Wacana</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display: flex; align-items: center; margin-bottom: 10px">
                            <div style="padding-left: 55px">
                                <div class="green-circle">
                                    <div class="circle" href="#">
                                        <h1><b>8</b></h1>
                                        <p>Mar<br />2024</p>
                                    </div>
                                </div>
                            </div>
                            <div style="padding-left: 10px">
                                <div class="agenda">
                                    <div style="text-decoration: none; color: #007663">
                                        <h1>International Women's Day</h1>
                                        <p style="line-height: 0px"><i class="fa fa-map-marker"></i>Universitas Kristen
                                            Duta
                                            Wacana</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div style="display: flex; align-items: center; margin-bottom: 10px">
                        <div style="padding-left: 55px">
                            <div class="green-circle">
                                <div class="circle" href="#">
                                    <h1><b>31</b></h1>
                                    <p>Mar<br />2024</p>
                                </div>
                            </div>
                        </div>
                        <div style="padding-left: 10px">
                            <div class="agenda">
                                <div style="text-decoration: none; color: #007663">
                                    <h1>Trans Day of Visability</h1>
                                    <p style="line-height: 0px"><i class="fa fa-map-marker"></i>Universitas Kristen
                                        Duta
                                        Wacana</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <h1>IWD screening film bertemakan perempuan >> kolaborasi bersama KSG UKDW</h1>
                                    <p style="line-height: 0px"><i class="fa fa-map-marker"></i>Universitas Kristen
                                        Duta
                                        Wacana</p>
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
                                    <p style="line-height: 0px"><i class="fa fa-map-marker"></i>Universitas Kristen
                                        Duta
                                        Wacana</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
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
                                    <p style="line-height: 0px"><i class="fa fa-map-marker"></i>Universitas Kristen Duta
                                        Wacana</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="display: flex; align-items: center; margin-bottom: 10px">
                        <div style="padding-left: 55px">
                            <div class="green-circle">
                                <div class="circle" href="#">
                                    <h1><b>17</b></h1>
                                    <p>Mei<br />2024</p>
                                </div>
                            </div>
                        </div>
                        <div style="padding-left: 10px">
                            <div class="agenda">
                                <div style="text-decoration: none; color: #007663">
                                    <h1>Idahobit</h1>
                                    <p style="line-height: 0px"><i class="fa fa-map-marker"></i>Universitas Kristen
                                        Duta
                                        Wacana</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="display: flex; align-items: center; margin-bottom: 10px">
                        <div style="padding-left: 55px">
                            <div class="green-circle">
                                <div class="circle" href="#">
                                    <h1><b>17</b></h1>
                                    <p>Agu<br />2024</p>
                                </div>
                            </div>
                        </div>
                        <div style="padding-left: 10px">
                            <div class="agenda">
                                <div style="text-decoration: none; color: #007663">
                                    <h1>Independent Day</h1>
                                    <p style="line-height: 0px"><i class="fa fa-map-marker"></i>Universitas Kristen
                                        Duta
                                        Wacana</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div id="program-section" class="section hidden" style="padding-left: 20%; padding-right: 20%;">
        <h2 style="text-align: center; margin-bottom: 35px;"><b>Program Kegiatan</b></h2>
        <div class="program-card">
            <a href="{{ route('program.detail', ['id' => 1]) }}" style="text-decoration:none; color:#04372E">
                <h3>Koordinasi Nasional PPKS</h3>
                <p>Koordinasi Nasional Pencegahan dan Penanganan Kekerasan Seksual di Jakarta.</p>
            </a>
        </div>
        <div class="program-card">
            <a href="{{ route('program.detail', ['id' => 2]) }}" style="text-decoration:none; color:#04372E">
                <h3>Sosialisasi Satgas PPKS Di Rangkaian OKA</h3>
                <p>Pemahaman Tentang Pencegahan Kekerasan Seksual.</p>
            </a>
        </div>
        <div class="program-card">
            <a href="{{ route('program.detail', ['id' => 3]) }}" style="text-decoration:none; color:#04372E">
                <h3>Lomba Video Pendek</h3>
                <p>Merayakan Hari Perempuan Internasional Dengan Mengadakan Lomba.</p>
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
