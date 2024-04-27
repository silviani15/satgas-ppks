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
        <h1 class="h2">Daftarkan Petugas</h1>
    </div>
    <main class="form-petugas">
        <div class="col-lg-8">
            <form method="post" action="/dashboard/petugas" class="mb-5" enctype="multipart/form-data">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top @error('name')is-invalid @enderror"
                        id="name" placeholder="Name" required value="{{ old('name') }}">
                    <label for="name">Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username')is-invalid @enderror"
                        id="username" placeholder="Username" required value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" placeholder="name@gmail.com" required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password"
                        class="form-control rounded-bottom @error('password')is-invalid @enderror" id="password"
                        placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <select name="role" class="form-select rounded-bottom @error('role') is-invalid @enderror" id="role" required>
                        <option value="">Pilih Role</option>
                        <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                        <option value="petugas" {{ old('role') == 'petugas' ? 'selected' : '' }}>Petugas</option>
                    </select>
                    <label for="role">Role</label>
                    @error('role')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>                

                <button class="btn w-100 py-2 mt-3" style="background-color: #04372E; color: #EBFEFE"
                    type="submit">Daftar</button>
            </form>
        </div>
    </main>
@endsection
