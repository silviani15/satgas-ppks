@extends('dashboard.layouts.main')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome, {{ auth()->user()->name }}</h1>
    </div>

    <div class="row">
        <p><a href="/" class="btn my-2" style="background-color: #007663; color: #EBFEFE; margin-left: 1030px"><i
                    class="fa-solid fa-arrow-left"></i> Kembali ke Beranda</a></p>
        <h5 style="margin-bottom: 25px">Daftar Laporan</h5>

        <div class="col">
            <div class="row">
                <div class="col">
                    <div class="card mb-3 bg-info" style="max-width: 18rem;">
                        <div class="row no-gutters">
                            <div class="col-md-4 d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-arrow-right-to-bracket fa-4x" style="color: #ffffff;"></i>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Diterima</h5>
                                    <p class="card-text">{{ $total_pengaduan }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="col">
                <div class="card mb-3 bg-warning" style="max-width: 18rem;">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-arrow-right-arrow-left fa-4x" style="color: #ffffff;"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Diproses</h5>
                                <p class="card-text">{{ $pengaduan_Diproses }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="col">
                <div class="card mb-3 bg-success" style="max-width: 18rem;">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-clipboard-check fa-4x" style="color: #ffffff;"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Selesai</h5>
                                <p class="card-text">{{ $pengaduan_Selesai }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col">
            <div class="col">
                <div class="card mb-3 bg-danger" style="max-width: 18rem;">
                    <div class="row no-gutters">
                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-circle-xmark fa-4x" style="color: #ffffff;"></i>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Ditolak</h5>
                                <p class="card-text">{{ $pengaduan_Ditolak }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Secondary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
            <div class="col-6">
                <div class="card text-bg-primary mb-3" style="max-width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title">Secondary card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            </div> --}}
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>

    <script src="js/dashboard.js"></script>
@endsection
