@extends('dashboard.layouts.main')
<style>
    .password-toggle {
        position: absolute;
        top: 25px;
        right: 20px;
        cursor: pointer;
    }

    .password-toggle i {
        color: #666;
    }

    .password-toggle i:hover {
        color: #333;
    }
</style>

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="https://kit.fontawesome.com/926d10f56e.js" crossorigin="anonymous"></script>

    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endsection

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Petugas</h1>
    </div>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif

    <div class="col-lg-8">
        <form method="POST" action="{{ url('/dashboard/petugas/' . $petugas->id . '/reset-password') }}" class="mb-5"
            enctype="multipart/form-data">
            {{-- {{ Form::model($petugas, ['route' => ['/dashboard/petugas.update', $petugas->id], 'method' => 'PUT']) }} --}}

            @csrf
            <input type="hidden" value="{{ $petugas->id }}" name="id">

            <div class="modal-body">
                <h4><label for="new_password" class="form-label">New Password</label></h4>
                <p>Silahkan klik Reset Password</p>
                <div class="form-floating">
                    <input type="password"
                        class="form-control rounded-bottom password-input @error('new_password') is-invalid @enderror"
                        id="new_password" name="new_password" required>
                    <label for="new_password">New Password</label>
                    <div class="password-toggle">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </div>
                    <span id="displayPassword" class="ml-2" style="font-size: 20px; margin-left:10px"></span>
                </div>
                @error('new_password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button id="updateBtn" class="btn w-100 py-2 mt-3" style="background-color: #04372E; color: #EBFEFE;"
                type="submit">Update Petugas</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const passwordInput = document.getElementById('new_password');
        const toggleButton = document.querySelector('.password-toggle');

        toggleButton.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.querySelector('i').classList.toggle('fa-eye-slash');
        });
    });
</script>
