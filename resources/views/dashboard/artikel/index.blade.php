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
            <h1 class="h2">My Artikel</h1>
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
            <a href="/dashboard/artikel/create" class="btn mb-3" style="background-color: #007663; color: #EBFEFE">Create
                new artikel</a>
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($artikel as $artikel)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $artikel->title }}</td>
                            <td>{{ $artikel->category->name }}</td>
                            <td>
                                <a href="/dashboard/artikel/{{ $artikel->slug }}" class="badge bg-info"><i
                                        class="fa-solid fa-eye"></i></a>
                                <a href="/dashboard/artikel/{{ $artikel->slug }}/edit" class="badge bg-warning"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <form action="/dashboard/artikel/{{ $artikel->slug }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i
                                            class="fa-solid fa-trash"></i></button>
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

    <script src="js/dashboard.js"></script>
@endsection
