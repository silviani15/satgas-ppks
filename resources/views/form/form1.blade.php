@extends('layout.main')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .alert.alert-danger {
            border: none;
            color: red;
            background-color: white;
            padding: 5px;
        }
    </style>
@endsection

@section('container')
    <div class="f1">
        <h1 style="margin-top: 8%">Aduan Online</h1>
        <a href="#" class="btn btn-warning scrollto" target="__blank" style="margin-top: 2%">Petunjuk Pelaporan</a>
        <div class="f1-steps" style="margin-top: 3%">
            <div class="f1-progress">
                <div class="f1-progress-line" data-now-value="25" data-number-of-steps="4" style="width: 16%"></div>
            </div>
            <div class="f1-step actives">
                <div class="f1-step-icon"><i class="1">1</i></div>
                <p>Langkah 1</p>
            </div>
            <div class="f1-step">
                <div class="f1-step-icon">2</div>
                <p>Langkah 2</p>
            </div>
            <div class="f1-step">
                <div class="f1-step-icon">3</div>
                <p>Langkah 3</p>
            </div>
            <div class="f1-step">
                <div class="f1-step-icon">4</div>
                <p>Langkah 4</p>
            </div>
            <div class="f1-step">
                <div class="f1-step-icon">5</div>
                <p>Langkah 5</p>
            </div>
            <div class="f1-step">
                <div class="f1-step-icon">6</div>
                <p>Langkah 6</p>
            </div>
        </div>
    </div>
    <br>

    <!-- step 1 -->
    <form action="/laporkan" method="POST">
        @csrf
        <fieldset>
            <div class="alert bg-light">
                <hr />
                <div class="form-group mt-3">
                    <label for="apakah_kamu">Apakah kamu ? <small class="text-danger">*</small></label>
                    <select name="apakah_kamu" id="apakah_kamu" class="form-control mt-1 required">
                        <option value="">- pilih -</option>
                        <option value="1">Individu yang pernah mengalami sebuah insiden pelecahan
                            seksual</option>
                        <option value="2">Individu yang membantu orang lain yang mengalami sebuah
                            pelecehan seksual</option>
                        <option value="3">Responden dari UKDW</option>
                        <option value="4">Bagian Unit Pengaduan (Misal. Satpam, atau yang memiliki
                            wewenang untuk membantu seseorang yang mengalami insiden pelecehan seksual)
                        </option>
                        <option value="5">Individu yang menyaksikan sebuah insiden pelecehan seksual
                        </option>
                        <option value="6">Memilih untuk tidak mengungkapkan identitas</option>
                    </select>
                    @if ($errors->has('apakah_kamu'))
                        <div class="alert alert-danger">Field is required.</div>
                    @endif
                </div>
                <div class="form-group mt-3">
                    <label for="individu_terkena_dampak">Individu yang terkena dampak pelecehan seksual
                        merupakan? <small class="text-danger">*</small></label>
                    <select name="individu_terkena_dampak" id="individu_terkena_dampak" class="form-control mt-1 required">
                        <option value="">- pilih -</option>
                        <option value="7">Bagian dari UKDW (Misalnya : Tamu, Pegawai Kantin, Tukang di lingkungan UKDW)
                        </option>
                        <option value="8">Alumni UKDW</option>
                        <option value="9">Mahasiswa aktif UKDW</option>
                        <option value="10">Staff UKDW yang masih aktif bekerja</option>
                        <option value="11">Staff UKDW yang telah pensiun</option>
                        <option value="12">Masyarakat umum</option>
                    </select>
                    @if ($errors->has('individu_terkena_dampak'))
                        <div class="alert alert-danger">Field is required.</div>
                    @endif
                </div>
                <div class="form-group mt-3">
                    <label for="berhubungan_dengan_ukdw">Apakah insiden kekerasan seksual tersebut
                        berhubungan dengan UKDW
                        (Misal terjadi di kampus UKDW atau Organisasi Mahasiswa UKDW atau selama
                        beraktivitas di UKDW seperti Studi Banding atau Magang)?
                        <small class="text-danger">*</small></label>
                    <select name="berhubungan_dengan_ukdw" id="berhubungan_dengan_ukdw" class="form-control mt-1 required">
                        <option value="">- pilih -</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                        <option value="Tidak Yakin">Tidak Yakin</option>
                    </select>
                    @if ($errors->has('berhubungan_dengan_ukdw'))
                        <div class="alert alert-danger">Field is required.</div>
                    @endif
                </div>
                <div class="f1-buttons float-end mt-4 mb-4">
                    <button type="submit" class="btn btn-primary btn-next">Selanjutnya <i
                            class="fa fa-arrow-right"></i></button>
                </div>
            </div>
        </fieldset>
    </form>
@endsection
