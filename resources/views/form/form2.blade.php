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
        <div class="f1-steps" style="margin-top: 10%">
            <div class="f1-progress">
                <div class="f1-progress-line" data-now-value="25" data-number-of-steps="4" style="width: 32%"></div>
            </div>
            <div class="f1-step">
                <div class="f1-step-icon">1</div>
                <p>Langkah 1</p>
            </div>
            <div class="f1-step actives">
                <div class="f1-step-icon"><i class="2">2</i></div>
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

    <!-- step 2 -->
    <form action={{ 'langkah2' }} method="POST">
        @csrf
        <fieldset>
            <div class="alert bg-light">
                <hr />
                <div class="form-group mt-3">
                    <label for="tempat_insiden">Dimana insiden pelecehan tersebut terjadi ? <span class="text-danger">*</span></label>
                    <select name="tempat_insiden" id="tempat_insiden" class="form-control mt-1 required">
                        <option value="">- pilih -</option>
                        <option value="Gedung Agape">Gedung Agape</option>
                        <option value="Gedung Biblos">Gedung Biblos</option>
                        <option value="Gedung Chara">Gedung Chara</option>
                        <option value="Gedung Didaktos">Gedung Didaktos</option>
                        <option value="Gedung Eudia">Gedung Eudia</option>
                        <option value="Gedung Filia">Gedung Filia</option>
                        <option value="Gedung Gnosis">Gedung Gnosis</option>
                        <option value="Gedung Hagios">Gedung Hagios</option>
                        <option value="Gedung Iama">Gedung Iama</option>
                        <option value="Gedung Koinonia">Gedung Koinonia</option>
                        <option value="Gedung Makarios">Gedung Makarios</option>
                        <option value="Gedung Logos">Gedung Logos</option>
                        <option value="Selama perjalanan (Misal. Mobil Online)">Selama perjalanan (Misal. Mobil Online)</option>
                        <option value="Selama kegiatan diluar Kampus UKDW (Misal. Studi banding, Magang, KKN)">Selama kegiatan diluar Kampus UKDW (Misal. Studi banding, Magang, KKN)</option>
                        <option value="Diluar lingkungan kampus dan sedang tidak ada kegiatan apapun di UKDW">Diluar lingkungan kampus dan sedang tidak ada kegiatan apapun di UKDW</option>
                        <option value="Sosial Media (Online)">Sosial Media (Online)</option>
                        <option value="Tidak Yakin">Tidak Yakin</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    @if ($errors->has('tempat_insiden'))
                        <div class="alert alert-danger">Field is required.</div>
                    @endif
                </div>
                <div class="form-group mt-3">
                    <label for="lokasi_kejadian">Apakah ada sesuatu yang ingin anda tambahkan mengenai detail Lokasi kejadian? tolong sebutkan tempat/kejadiannya? <span class="text-danger">*</span></label>
                    <textarea name="lokasi_kejadian" id="lokasi_kejadian" class="form-control mt-1 required"></textarea>
                    @if ($errors->has('lokasi_kejadian'))
                        <div class="alert alert-danger">Field is required.</div>
                    @endif
                </div>
                <div class="form-group mt-3">
                    <label for="waktu_peristiwa">Kapan peristiwa pelecehan tersebut terjadi : <span class="text-danger">*</span></label>
                    <p for="" class="text-justify">
                        Polisi menyarankan untuk melakukan pemeriksaan medis secara forensik dalam kurun
                        waktu 3x24 Jam setelah pelecehan tersebut terjadi (meskipun dapat dilakukan 1 minggu
                        kemudian). Demikian pula dengan praktisi medis juga
                        menyarankan bahwa pemeriksaan tersebut lebih efektif dilakukan dalam kurun waktu
                        3x24 Jam setelah pelecehan tersebut terjadi.
                    </p>
                    <select name="waktu_peristiwa" id="waktu_peristiwa" class="form-control mt-1 required">
                        <option value="">- pilih -</option>
                        <option value="Dalam 3x24 jam terakhir">Dalam 3x24 jam terakhir</option>
                        <option value="Dalam 5 bulan terakhir">Dalam 5 bulan terakhir</option>
                        <option value="Dalam 12 bulan terakhir">Dalam 12 bulan terakhir</option>
                        <option value="Lebih dari 1 tahun, kurang dari 3 tahun">Lebih dari 1 tahun, kurang dari 3 tahun</option>
                        <option value="Lebih dari 5 tahun yang lalu">Lebih dari 5 tahun yang lalu</option>
                        <option value="Lebih dari 10 tahun yang lalu">Lebih dari 10 tahun yang lalu</option>
                    </select>
                    @if ($errors->has('waktu_peristiwa'))
                        <div class="alert alert-danger">Field is required.</div>
                    @endif
                </div>
                <div class="form-group mt-3">
                    <label for="kuantitas_insiden">Apakah insiden pelecehan tersebut terjadi lebih dari satu kali?
                        <small class="text-danger">*</small></label>
                    <select name="kuantitas_insiden" id="kuantitas_insiden" class="form-control mt-1 required">
                        <option value="">- pilih -</option>
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                    </select>
                    @if ($errors->has('kuantitas_insiden'))
                        <div class="alert alert-danger">Field is required.</div>
                    @endif
                </div>
                <div class="form-group mt-3">
                    <label for="apakah_masih_terjadi">Apakah masih terjadi? <small class="text-danger">*</small></label>
                    <select name="apakah_masih_terjadi" id="apakah_masih_terjadi" class="form-control mt-1 required">
                        <option value="">- pilih -</option>
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                    </select>
                    @if ($errors->has('apakah_masih_terjadi'))
                        <div class="alert alert-danger">Field is required.</div>
                    @endif
                </div>
                <div class="form-group mt-3">
                    <label for="uraian_kejadian">Apa yang terjadi? <small class="text-danger">*</small></label>
                    <textarea name="uraian_kejadian" id="uraian_kejadian" class="form-control mt-1 required"> </textarea>
                    @if ($errors->has('uraian_kejadian'))
                        <div class="alert alert-danger">Field is required.</div>
                    @endif
                </div>
                <div class="f1-buttons float-end mt-4 mb-4">
                    <button type="button" id="button-back" name="previous_button"
                        class="btn btn-warning btn-previous"><i class="fa fa-arrow-left"></i>
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
            window.location.href = '/laporkan'
        });
    });
</script>
