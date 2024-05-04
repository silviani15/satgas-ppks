@extends('dashboard.layouts.main')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('container')
    <div class="container-fluid" style="margin-top: 15px">
        <div class="row">
            <div class="col">
                <div class="card card-body shadow">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <a href="/dashboard/pengaduan/{{ $pengaduan->id }}">
                                <i class="fas fa-arrow-circle-left fa-2x"></i>
                            </a>
                            <h4>Tanggapi</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('tanggapan.store') }}" method="post" accept-charset="utf-8">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="tanggal_tanggapan" value="{{ Carbon\Carbon::now('Asia/Jakarta')->toDateString() }}">
                                <input type="hidden" name="pengaduan_id" value="{{ $pengaduan->id }}">
                                <label for="tanggapan"><b>Tanggapan</b></label><br>
                                <br><textarea class="form-control" name="tanggapan" rows="10" style="margin-bottom:15px"></textarea>
                            </div>
                            <button class="btn btn-primary form-control" type="submit">Tanggapi</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
