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
        <h1 class="h2"><b>Pengaduan</b></h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-10" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-10">
        <br>
        <h5 class="h2">Daftar Pengaduan</h5><br>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tgl_Pengaduan</th>
                    <th scope="col">Email</th>
                    <th scope="col">Bagian dari UKDW</th>
                    <th scope="col">Status Laporan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengaduans as $pengaduan)
                    <tr>
                        <th scope="row">{{ $pengaduan->id }}</th>
                        <td>{{ $pengaduan->tgl_pengaduan }}</td>
                        <td>{{ $pengaduan->email }}</td>
                        <td>{{ $pengaduan->bagian_ukdw }}</td>
                        <td>{{ $pengaduan->status_laporan }}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="statusDropdown{{ $pengaduan->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ $pengaduan->status_laporan }}
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="statusDropdown{{ $pengaduan->id }}">
                                    <li><a class="dropdown-item" href="#">Belum divalidasi</a></li>
                                    <li><a class="dropdown-item" href="#">Proses</a></li>
                                    <li><a class="dropdown-item" href="#">Selesai</a></li>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <a href="{{ route('admin.pengaduan.edit', $pengaduan->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ route('admin.pengaduan.show', $pengaduan->id) }}" class="btn btn-info">Detail</a>
                            <form action="{{ route('admin.pengaduan.destroy', $pengaduan->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
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
