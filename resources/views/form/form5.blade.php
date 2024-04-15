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
    <script>
        function cekStatusAnonim() {
            var namaPelapor = document.getElementById('nama_pelapor');
            var jenisKelaminPerempuan = document.getElementById('jenis_kelamin_perempuan');
            var jenisKelaminLaki = document.getElementById('jenis_kelamin_laki');
            var jenisKelaminLain = document.getElementById('jenis_kelamin_lain');
            var usiaPelapor = document.getElementById('usia_pelapor');
            var nomorTeleponPelapor = document.getElementById('nomor_telepon_pelapor');

            var statusAnonim = document.getElementById('status_anonim').checked;

            namaPelapor.disabled = statusAnonim;
            jenisKelaminPerempuan.disabled = statusAnonim;
            jenisKelaminLaki.disabled = statusAnonim;
            jenisKelaminLain.disabled = statusAnonim;
            usiaPelapor.disabled = statusAnonim;
            nomorTeleponPelapor.disabled = statusAnonim;

            if (statusAnonim) {
                namaPelapor.value = '';
                jenisKelaminPerempuan.checked = false;
                jenisKelaminLaki.checked = false;
                jenisKelaminLain.checked = false;
                usiaPelapor.value = '';
                nomorTeleponPelapor.value = '';
            }
        }
    </script>
@endsection

@section('container')
    <div class="f1">
        <div class="f1-steps" style="margin-top: 10%">
            <div class="f1-progress">
                <div class="f1-progress-line" data-now-value="25" data-number-of-steps="4" style="width: 80%"></div>
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
            <div class="f1-step">
                <div class="f1-step-icon">4</div>
                <p>Langkah 4</p>
            </div>
            <div class="f1-step actives">
                <div class="f1-step-icon"><i class="5">5</i></div>
                <p>Langkah 5</p>
            </div>
            <div class="f1-step">
                <div class="f1-step-icon">6</div>
                <p>Langkah 6</p>
            </div>
        </div>
    </div>
    <br>

    <!-- step 5 -->
    <form action="langkah5" method="POST">
        @csrf
        <fieldset>
            <div class="alert bg-light">
                <hr />
                <div class="form-group mt-3">
                    <label for="">Kami memahami bahwa isian informasi dibawah ini sangat sensitif,
                        namun isian ini kami perlukan agar kami dapat merespon/ mendiskusikan/ dan
                        memberikan bantuan kepada Anda.</label><br>
                    <div class="form-check"><br>
                        <input type="checkbox" class="form-check-input" id="status_anonim" name="status_anonim"
                            onchange="cekStatusAnonim()" />
                        <label class="form-check-label" for="exampleCheck1">Saya memilih untuk tetap
                            anonim</label>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="nama_pelapor">Nama Lengkap</label>
                    <input type="text" class="form-control mt-1" placeholder="Nama Lengkap" name="nama_pelapor"
                        id="nama_pelapor" value="" />
                </div>
                <div class="form-group mt-3" for="jenis_Kelamin">
                    <p>Jenis Kelamin</p>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="jenis_kelamin_perempuan" name="layanan_dicoba[]"
                            value="41" />
                        <label class="form-check-label" for="jenis_kelamin_perempuan">Perempuan</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="jenis_kelamin_laki" name="layanan_dicoba[]"
                            value="42" />
                        <label class="form-check-label" for="jenis_kelamin_laki">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="jenis_kelamin_lain" name="layanan_dicoba[]"
                            value="43" />
                        <label class="form-check-label" for="jenis_kelamin_lain">Yang lain</label>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="usia_pelapor">Usia</label>
                    <input type="text" class="form-control mt-1" placeholder="" name="usia_pelapor" id="usia_pelapor"
                        value="" />
                </div>
                <div class="form-group mt-3">
                    <label for="nomor_telepon_pelapor">Nomor Handphone</label>
                    <input type="text" class="form-control mt-1" placeholder="(+62)" name="nomor_telepon_pelapor"
                        id="nomor_telepon_pelapor" value="" />
                </div>
                <div class="form-group mt-3">
                    <label for="email_pelapor">Email<small class="text-danger">*</small></label>
                    <input type="email" class="form-control mt-1 required" data-error-message="Field is required."
                        placeholder="" name="email_pelapor" id="email_pelapor" value="" />
                    @if ($errors->has('email_pelapor'))
                        <div class="alert alert-danger">Field is required.</div>
                    @endif
                </div>
                <div class="form-group mt-3">
                    <label for="dihubungi_lewat">Dapat dihubungi melalui</label>
                    <select name="dihubungi_lewat" id="dihubungi_lewat" class="form-control mt-1">
                        <option value="">- pilih -</option>
                        <option value="64">Whatsapp</option>
                        <option value="65">DM Instagram</option>
                        <option value="66">SMS</option>
                        <option value="67">Email</option>
                        <option value="68">Lainnya</option>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="dihubungi_lewat_lainnya">Jika Anda memilih untuk dihubungi dengan cara
                        lainnya, mohon
                        tuliskan disini:</label>
                    <input type="text" class="form-control mt-1" placeholder="Akun atau No. Terkait"
                        name="dihubungi_lewat_lainnya" id="dihubungi_lewat_lainnya" />
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
            window.location.href = '/langkah4'
        });
    });
</script>
