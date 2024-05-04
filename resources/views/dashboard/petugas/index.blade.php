@extends('dashboard.layouts.main')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="https://kit.fontawesome.com/926d10f56e.js" crossorigin="anonymous"></script>

    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endsection

@section('container')
    <div class="container-fluid">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"><b>Petugas</b></h1>
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
            <a href="/dashboard/petugas/create" class="btn btn-primary mb-3"
                style="margin-left:90%; background-color: #007663; color: #EBFEFE">Add Petugas</a>
            <h5 class="h2">Daftar Petugas</h5>
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Status Petugas</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($petugas as $petugas)
                        <tr>
                            <td>{{ $petugas->name }}</td>
                            <td>{{ $petugas->username }}</td>
                            <td>{{ $petugas->email }}</td>
                            {{-- <td>
                            @if ($petugas->status === 'pending')
                                <form action="{{ route('admin.users.approve', $petugas->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Approve</button>
                                </form>

                                <form action="{{ route('admin.users.reject', $petugas->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Reject</button>
                                </form>
                            @endif
                        </td> --}}
                            <td>{{ $petugas->is_admin === 'admin' ? 'Admin' : 'Petugas' }}</td>
                            <td>{{ $petugas->activation_status }}</td>

                            <td>
                                {{-- <a href="#" class="badge bg-success"><i class="fa fa-check-circle-o"
                                    aria-hidden="true"></i></a>
                            <a href="#" class="badge bg-secondary"><i class="fa fa-times-circle-o"
                                    aria-hidden="true"></i></a> --}}

                                {{-- @if ($petugas->activation_status === 'active')
                                <a href="{{ route('petugas.toggleStatus', $petugas->id) }}" class="badge bg-success">
                                    <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                                </a>
                            @else
                                <a href="{{ route('petugas.toggleStatus', $petugas->id) }}" class="badge bg-secondary">
                                    <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                                </a>
                            @endif --}}

                                @if ($petugas->activation_status === 'active')
                                    <a href="{{ route('petugas.toggleStatus', $petugas->id) }}" class="badge bg-secondary"
                                        title="inactive">
                                        <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                                    </a>
                                @else
                                    <a href="{{ route('petugas.toggleStatus', $petugas->id) }}" class="badge bg-success"
                                        title="active">
                                        <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                                    </a>
                                @endif

                                <a href="/dashboard/petugas/{{ $petugas->id }}/edit?email={{ $petugas->email }}"
                                    class="badge bg-warning" title="Edit">
                                    <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i>
                                </a>
                                <form action="/dashboard/petugas/{{ $petugas->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0" title="Delete"
                                        onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i></button>
                                </form>
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

    <script src="{{ asset('js/dashboard.js') }}"></script>
@endsection
