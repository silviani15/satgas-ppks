@extends('layout.main')
<style>
    .password-toggle {
        position: absolute;
        top: 20px;
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

@section('container')
    <div class="row justify-content-center" style="margin-top: 15%">
        <div class="col-md-5">

            @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center"><b>Please Login</b></h1>
                <h5 class="h6 mb-3 fw-normal text-center"><span class="text-danger"> *</span>Login Khusus Petugas Satgas
                    PPKS UKDW</h5>
                <form action="/login" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                            required>
                        <label for="password">Password</label>
                        <div class="password-toggle">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                        </div>
                    </div>

                    <button class="btn w-100 py-2" style="background-color: #04372E; color: #EBFEFE"
                        type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-3">Not Registered? <a href="/register" style="color: #007663">Register
                        Now!</a></small>
            </main>
        </div>
    </div>
@endsection

<script>document.addEventListener('DOMContentLoaded', function () {
    const passwordInput = document.getElementById('password');
    const toggleButton = document.querySelector('.password-toggle');

    toggleButton.addEventListener('click', function () {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        this.querySelector('i').classList.toggle('fa-eye-slash');
    });
});
</script>