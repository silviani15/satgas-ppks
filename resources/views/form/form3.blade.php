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
                <div class="f1-progress-line" data-now-value="25" data-number-of-steps="4" style="width: 48%"></div>
            </div>
            <div class="f1-step">
                <div class="f1-step-icon">1</div>
                <p>Langkah 1</p>
            </div>
            <div class="f1-step">
                <div class="f1-step-icon">2</div>
                <p>Langkah 2</p>
            </div>
            <div class="f1-step actives">
                <div class="f1-step-icon"><i class="3">3</i></div>
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

    <!-- step 3 -->
    <form action="langkah3" method="POST">
        @csrf
        <fieldset>
            <div class="alert bg-light">
                <hr />
                <div>
                    <label for="layanan_dicoba">
                        <p>Apakah anda pernah mencoba salah satu Layanan dibawah ini? <span class="text-danger">*</span>
                        </p>
                    </label>

                    @for ($i = 0; $i < count($layanan_dicoba); $i++)
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="tindakan_dicoba[]"
                                id="tindakan_dicoba-{{ $layanan_dicoba[$i] }}" value="{{ $layanan_dicoba[$i] }}" />
                            <label class="form-check-label" for="exampleCheck1">{{ $layanan_dicoba[$i] }}</label>
                        </div>
                    @endfor

                    <input type="text" placeholder="lainnya ..." class="form-control" name="layanan_lainnya"
                        value="" />
                    @if ($errors->has('layanan_dicoba'))
                        <div class="alert alert-danger">Field is required.</div>
                    @endif
                </div><br />
                <div for="tindakan_dicoba">
                    <p class="mt-4">Tindakan seperti apa yang anda inginkan untuk dilakukan oleh UKDW?
                    </p>

                    @for ($i = 0; $i < count($tindakan_dicoba); $i++)
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="layanan_dicoba[]"
                                id="tindakan_dicoba-{{ $tindakan_dicoba[$i] }}" value="{{ $tindakan_dicoba[$i] }}" />
                            <label class="form-check-label" for="exampleCheck1">{{ $tindakan_dicoba[$i] }}</label>
                        </div>
                    @endfor


                    <input type="text" placeholder="lainnya ..." class="form-control" name="tindakan_lainnya"
                        value="" />
                </div><br />
                <div class="alert alert-warning">
                    <p>Catatan Penting:</p>
                    <p>Ada 3 cara untuk membuat laporan mengenai tindakan pelecehan seksual maupun percobaan
                        pelecehan seksual</p>
                    <ol>
                        <li>Hubungi Satgas Kekerasan Seksual untuk membantu Anda mendapatkan informasi
                            mengenai proses pelaporan.</li>
                        <li>Hubungi kantor Polisi terdekat untuk membuatn Pengaduan resmi</li>
                        <li>Mengisi dengan lengkap formulir online ini.</li>
                    </ol>
                    <p class="text-justify">
                        Kuesioner ini dapat membuat anda merasa kurang nyaman dan menimbulkan keresahan.
                        Disarankan mengisi kuesioner ini dengan pendampingan. Jika diperlukan, Anda dapat
                        kami temani saat membuat pengaduan.
                    </p>
                    <p class="text-justify">Penting untuk dipahami bahwa kami memiliki keterbatasan untuk
                        melakukan tindakan diluar kemampuan kami, namun Kami mencoba untuk selalu membantu
                        dengan memberikan informasi apapun.</p>
                    <p class="text-justify">
                        <b>Untuk komunikasi yang lebih intensif, di akhir formulir online ini, kami berharap
                            anda bisa mengisi identitas pribadi anda (kerahasiaan data kami jaga), namun
                            sebagai alternatif Anda dapat menggunakan akun email yang
                            tidak teridentifikasi untuk melindungi anda identitas Anda.</b>
                    </p>
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
            window.location.href = '/langkah2'
        });
    });
</script>
