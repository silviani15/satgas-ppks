@extends('dashboard.layouts.main')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azPrG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://kit.fontawesome.com/926d10f56e.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endsection

@section('container')
    <div class="container-fluid">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"><b>Pengaduan</b></h1>
        </div>
        @if (session('danger'))
            <div class="alert alert-danger" role="alert">
                {{ session('danger') }}
            </div>
        @endif

        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
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
                                <form action="{{ route('admin.updateStatus', $pengaduan->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    <select name="status" onchange="this.form.submit()">
                                        <option value="KS" {{ $pengaduan->status_laporan == 'Kekerasan Seksual' ? 'selected' : '' }}>Kekerasan Seksual</option>
                                        <option value="Bukan KS" {{ $pengaduan->status_laporan == 'Bukan KS' ? 'selected' : '' }}>Bukan KS</option>
                                    </select>
                                </form>

                                <a href="/dashboard/pengaduan/{{ $pengaduan->id }}" class="btn btn-info"
                                    style="color: #ffffff;"><i class="fa-solid fa-clipboard"></i> Detail
                                </a>

                                {{-- <form action="/dashboard/pengaduan/reject/{{ $pengaduan->id }}" method="post"
                                    class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa-solid fa-circle-xmark" style="color: #ffffff;"></i> Tolak
                                    </button>
                                </form> --}}

                                @if ($pengaduan->status_laporan != 'Bukan KS' && $pengaduan->status_laporan != 'Ditolak')
                                    <!-- Tombol untuk menolak pengaduan -->
                                    <form action="/dashboard/pengaduan/reject/{{ $pengaduan->id }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa-solid fa-circle-xmark" style="color: #ffffff;"></i> Tolak
                                        </button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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
