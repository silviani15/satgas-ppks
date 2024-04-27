@extends('layout.main')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('container')
    <div class="f1">
        <div class="f1-steps" style="margin-top: 10%">
            <div class="f1-progress">
                <div class="f1-progress-line" data-now-value="25" data-number-of-steps="4" style="width: 64%"></div>
            </div>
            <div class="f1-step">
                <div class="f1-step-icon">1</div>
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
            <div class="f1-step actives">
                <div class="f1-step-icon"><i class="4">4</i></div>
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

    <!-- step 4 -->
    <form action="langkah4" method="POST">
        @csrf
        <fieldset>
            <div class="alert bg-light">
                <hr />
                <div class="form-group mt-3">
                    <label for="orang_yang_bertanggungjawab">Seseorang yang bertanggung jawab atas Pelecehan Seksual tersebut ialah</label>
                    <select name="orang_yang_bertanggungjawab" id="orang_yang_bertanggungjawab" class="form-control mt-1">
                        <option value="">- pilih -</option>
                        <option value="Orang yang memiliki hubungan dengan UKDW (Misal. Tamu, Pekerja di lingkungan UKDW)">
                            Orang yang memiliki hubungan dengan UKDW (Misal. Tamu, Pekerja di lingkungan
                            UKDW)</option>
                        <option value="Alumni dari UKDW">Alumni dari UKDW</option>
                        <option value="Mahasiswa UKDW">Mahasiswa UKDW</option>
                        <option value="Staff UKDW yang bekerja saat ini">Staff UKDW yang bekerja saat ini</option>
                        <option value="Masyarakat Umum">Masyarakat Umum</option>
                    </select>
                </div>
                <div class="alert alert-warning mt-4">
                    <p>Catatan:</p>
                    <ol>
                        <li>Jika Anda ingin mengungkap / memberitahukan / meyakini identitas seseorang yang
                            bertanggung jawab atas pelecehan tersebut, silakan tuliskan identitas tersebut
                            dibawah ini.</li>
                        <li>Jika Anda membuat laporan pelecehan seksual atas nama orang lain dan mereka
                            mengizinkan, silakan tuliskan identitas seseorang yang bertanggung jawab atas
                            pelecehan tersebut di bawah ini.</li>
                    </ol>
                </div>
                <div class="form-group mt-3">
                    <label for="nama_terlapor">Nama Lengkap terlapor <small class="text-muted">(boleh
                            kosong)</small></label>
                    <input type="text" class="form-control mt-1" placeholder="Nama Lengkap" name="nama_terlapor"
                        id="nama_terlapor" value="" />
                </div>
                <div class="form-group mt-3">
                    <label for="nomor_telepon_terlapor">Nomor Handphone terlapor <small class="text-muted">(boleh
                            kosong)</small></label>
                    <input type="text" class="form-control mt-1" placeholder="(+62)" name="nomor_telepon_terlapor"
                        id="nomor_telepon_terlapor" value="" />
                </div>
                <div class="form-group mt-3">
                    <label for="email_terlapor">Email terlapor <small class="text-muted">(boleh
                            kosong)</small></label>
                    <input type="email" class="form-control mt-1" placeholder="" name="email_terlapor" id="email_terlapor"
                        value="" />
                </div>
                <div class="form-group mt-3">
                    <label for="identitas_lainnya_terlapor">Informasi Identitas Lainnya <small class="text-muted">(boleh
                            kosong)</small></label>
                    <input type="text" class="form-control mt-1" placeholder="Identitas lainnya"
                        name="identitas_lainnya_terlapor" id="identitas_lainnya_terlapor" value="" />
                </div>
                <div class="form-group mt-3">
                    <label for="alasan_merahasiakan">Jika Anda tidak dapat/memilih untuk tidak mengungkapkannya, silakan
                        pilih pilihan berikut</label>
                    <select name="alasan_merahasiakan" id="alasan_merahasiakan" class="form-control mt-1">
                        <option value="">- pilih -</option>
                        <option value="Saya / Orang yang melaporkan kejadian tersebut tidak mengetahui nama orang tersebut">Saya / Orang yang melaporkan kejadian tersebut tidak
                            mengetahui nama orang tersebut</option>
                        <option value="Saya / Orang yang melaporkan kejadian tersebut tidak ingin mengungkapkan nama orang tersebut">Saya / Orang yang melaporkan kejadian tersebut tidak ingin
                            mengungkapkan nama orang tersebut</option>
                        <option value="Saya / Orang yang melaporkan kejadian tersebut akan memberitahukan setelah mendapatkan informasi lebih lanjut">Saya / Orang yang melaporkan kejadian tersebut akan
                            memberitahukan setelah mendapatkan informasi lebih lanjut</option>
                    </select>
                </div>
                <div class="f1-buttons float-end mt-4 mb-4">
                    <button type="button" id="button-back" name="previous_button" class="btn btn-warning btn-previous"><i
                            class="fa fa-arrow-left"></i>
                        Sebelumnya</button>
                    <button type="submit" class="btn btn-primary btn-next">Selanjutnya <i
                            class="fa fa-arrow-right"></i></button>
                </div>
            </div>
        </fieldset>
    </form>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const btn_back = document.getElementById("button-back");

        btn_back.addEventListener("click", function() {
            window.location.href = '/langkah3'
        });
    });
</script>
