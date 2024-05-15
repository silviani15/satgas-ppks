@extends('layout.main')
@section('title', 'Materi Satgas PPKS UKDW')
<link rel="stylesheet" href="css/materi.css" />

<body>
    <br><br><br><br>

    <h1 class="page-title" style="text-align: center"><b>Materi Satgas PPKS UKDW</b></h1>
    <hr class="separator" /><br>
    <div class="card-container" style="padding-left:13%; padding-right: 13%;">
        <div class="containera">
            <div class="box">
                <div class="background"></div>
                <div class="text-section">
                    <div class="sub-heading">SK & Kebijakan UKDW</div>
                    <div class="main-text">SK & Kebijakan UKDW tentang Pencegahan dan Penanganan Kekerasan Seksual di
                        Lingkungan UKDW</div>
                </div>
                <div class="image-box">
                    <div class="image-background"></div>
                    <div class="icon">
                        <i class="bi bi-file-earmark-text-fill"></i>
                    </div>
                </div>
                <div class="detail-button"><a href="{{ route('openPdf', 'sk_kebijakan.pdf') }}" class="detail-btn" style="color: aliceblue; text-decoration:none;"
                    target="_blank">
                    <div class="button-background"></div>
                    <div class="button-text">Detail</div></a>
                </div>
            </div>

            <div class="box">
                <div class="background"></div>
                <div class="text-section">
                    <div class="sub-heading">Peraturan Perundangan</div>
                    <div class="main-text">Peraturan Perundang-undangan tentang Pencegahan dan Penanganan Kekerasan
                        Seksual di Lingkungan Perguruan Tinggi</div>
                </div>
                <div class="image-box">
                    <div class="image-background"></div>
                    <div class="icon">
                        <i class="bi bi-file-earmark-text-fill"></i>
                    </div>
                </div>
                <div class="detail-button"><a href="{{ route('openPdf', 'peraturan_perundangan.pdf') }}"
                    class="detail-btn" style="color: aliceblue; text-decoration:none;" target="_blank">
                    <div class="button-background"></div>
                    <div class="button-text">Detail</div></a>
                </div>
            </div>

            <div class="box">
                <div class="background"></div>
                <div class="text-section">
                    <div class="sub-heading">Materi Penting lainnya</div>
                    <div class="main-text">Kumpulan Materi Penting tentang Pencegahan dan Penanganan Kekerasan Seksual
                    </div>
                </div>
                <div class="image-box">
                    <div class="image-background"></div>
                    <div class="icon">
                        <i class="bi bi-file-earmark-text-fill"></i>
                    </div>
                </div>
                <div class="detail-button"><a href="/materi/detailmateri" class="detail-btn" style="color: aliceblue; text-decoration:none;">
                    <div class="button-background"></div>
                    <div class="button-text">Detail</div></a>
                </div>
            </div>
        </div>
    </div><br>
    @include('main.footer')
</body>
