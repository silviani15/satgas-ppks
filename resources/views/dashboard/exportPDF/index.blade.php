@extends('dashboard.layouts.main')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="https://kit.fontawesome.com/926d10f56e.js" crossorigin="anonymous"></script>

    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endsection

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><b>Export PDF Pengaduan</b></h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-10" role="alert">
            {{ session('success') }}
        </div>
    @endif

    {{-- <div class="table-responsive col-lg-10">
        <br>
        <h5 class="h2">Daftar Pengaduan</h5><br>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode Tracking</th>
                    <th scope="col">Email</th>
                    <th scope="col">Bagian dari UKDW</th>
                    <th scope="col">Status Laporan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengaduan as $pengaduan)
                    <tr>
                        <th scope="row">{{ $pengaduan->id }}</th>
                        <td>{{ $pengaduan->kode_tracking }}</td>
                        <td>{{ $pengaduan->email_pelapor }}</td>
                        <td>{{ $pengaduan->individu_terkena_dampak }}</td>
                        <td>{{ $pengaduan->status_laporan }}</td>
                        <td>
                            <a href="/dashboard/pengaduan/{{ $pengaduan->id }}" class="btn btn-info"
                                style="color: #ffffff;"><i class="fa-solid fa-clipboard"></i> Detail</a>
                        </td>
                        </div>
                    </tr>
                @endforeach
            </tbody>
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
