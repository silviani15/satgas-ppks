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
            const statusAnonim = document.getElementById('status_anonim').checked;

            // Referensi elemen input yang akan dinonaktifkan
            const namaPelapor = document.getElementById('nama_pelapor');
            const jenisKelaminPerempuan = document.getElementById('jenis_kelamin_perempuan');
            const jenisKelaminLaki = document.getElementById('jenis_kelamin_laki');
            const usiaPelapor = document.getElementById('usia_pelapor');
            const nomorTeleponPelapor = document.getElementById('nomor_telepon_pelapor');

            // Setel properti disabled sesuai status checkbox
            namaPelapor.disabled = statusAnonim;
            jenisKelaminPerempuan.disabled = statusAnonim;
            jenisKelaminLaki.disabled = statusAnonim;
            usiaPelapor.disabled = statusAnonim;
            nomorTeleponPelapor.disabled = statusAnonim;

            // Jika dicentang, hapus nilai dan reset status
            if (statusAnonim) {
                namaPelapor.value = '';
                jenisKelaminPerempuan.checked = false;
                jenisKelaminLaki.checked = false;
                usiaPelapor.value = '';
                nomorTeleponPelapor.value = '';
            }
        }

        // Mendaftarkan event handler saat DOM sudah siap
        document.addEventListener("DOMContentLoaded", function() {
            const statusAnonimCheckbox = document.getElementById('status_anonim');

            if (statusAnonimCheckbox) {
                statusAnonimCheckbox.addEventListener('change', cekStatusAnonim);

                // Cek status awal untuk memastikan input dalam state yang benar
                cekStatusAnonim();
            }
        });
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
                            onchange="cekStatusAnonim()" value="" />
                        <label class="form-check-label" for="exampleCheck1">Saya memilih untuk tetap
                            anonim</label>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="nama_pelapor">Nama Lengkap</label>
                    <input type="text" class="form-control mt-1" placeholder="Nama Lengkap" name="nama_pelapor"
                        id="nama_pelapor" value="" />
                </div>
                <div class="form-group mt-3">
                    <p>Jenis Kelamin</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_perempuan" value="Perempuan">
                        <label class="form-check-label" for="jenis_kelamin_perempuan">Perempuan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_laki" value="Laki - Laki">
                        <label class="form-check-label" for="jenis_kelamin_laki">Laki - Laki</label>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label for="usia_pelapor">Usia</label>
                    <input type="text" class="form-control mt-1" placeholder="usia" name="usia_pelapor" id="usia_pelapor"
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
                        <option value="Whatsapp">Whatsapp</option>
                        <option value="DM Instagram">DM Instagram</option>
                        <option value="SMS">SMS</option>
                        <option value="Email">Email</option>
                        <option value="Lainnya">Lainnya</option>
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
