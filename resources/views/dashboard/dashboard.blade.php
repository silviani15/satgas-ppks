@extends('dashboard.layouts.main')

<head>
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ asset('ppks.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
</head>

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azPrG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome, {{ auth()->user()->name }}</h1>
    </div>

    <div class="d-flex justify-content-end mb-4"> <!-- Menggunakan Flexbox untuk tata letak tombol -->
        <a href="/" class="btn btn-primary" style="background-color: #007663; color: #EBFEFE;">
            <i class="fa-solid fa-arrow-left"></i> Kembali ke Beranda
        </a>
    </div>

    <div class="row"> <!-- Menggunakan Grid Bootstrap -->
        <h5 class="mb-3">Daftar Laporan</h5>

        <!-- Card Diterima -->
        <div class="col-12 col-md-6 col-lg-3"> <!-- Menggunakan col-12 untuk responsivitas -->
            <div class="card mb-3 bg-info">
                <div class="row no-gutters"> <!-- Menggunakan no-gutters untuk tata letak rapi -->
                    <div class="col-4 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-arrow-right-to-bracket fa-4x" style="color: #ffffff;"></i>
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h5 class="card-title">Diterima</h5>
                            <p class="card-text">{{ $total_pengaduan }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Diproses -->
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card mb-3 bg-warning">
                <div class="row no-gutters">
                    <div class="col-4 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-arrow-right-arrow-left fa-4x" style="color: #ffffff;"></i>
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h5 class="card-title">Diproses</h5>
                            <p class="card-text">{{ $pengaduan_Diproses }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Selesai -->
        <div class="col-12 col-md-6 col-lg-3"> <!-- Menggunakan col-md untuk tata letak responsif -->
            <div class="card mb-3 bg-success">
                <div class="row no-gutters">
                    <div class="col-4 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-clipboard-check fa-4x" style="color: #ffffff;"></i>
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h5 class="card-title">Selesai</h5>
                            <p class="card-text">{{ $pengaduan_Selesai }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Ditolak -->
        <div class="col-12 col-md-6 col-lg-3"> <!-- Gunakan col-lg untuk tata letak pada layar besar -->
            <div class="card mb-3 bg-danger">
                <div class="row no-gutters">
                    <div class="col-4 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-circle-xmark fa-4x" style="color: #ffffff;"></i>
                    </div>
                    <div class="col-8">
                        <div class="card-body">
                            <h5 class="card-title">Ditolak</h5>
                            <p class="card-text">{{ $pengaduan_Ditolak }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endsection
