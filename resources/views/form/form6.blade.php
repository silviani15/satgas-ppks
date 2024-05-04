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
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="f1">
        <div class="f1-steps" style="margin-top: 10%">
            <div class="f1-progress">
                <div class="f1-progress-line" data-now-value="25" data-number-of-steps="4" style="width: 100%"></div>
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
            <div class="f1-step">
                <div class="f1-step-icon">5</div>
                <p>Langkah 5</p>
            </div>
            <div class="f1-step actives">
                <div class="f1-step-icon"><i class="6">6</i></div>
                <p>Langkah 6</p>
            </div>
        </div>
    </div>
    <br>

    <!-- step 6 -->

    <form action="/submit-all" method="post">
        @csrf
        <form action="{{ route('verify_otp') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <fieldset>
                <div class="alert bg-light" action="{{ route('verify_otp') }}" enctype="multipart/form-data">
                    <hr />
                    <div class="form-group mt-3">
                        <label for="file_lampiran">Lampirkan bukti/file pendukung (Hanya diperlukan jika
                            menurut Anda dapat membantu). Bukti pendukung tidak lebih dari 10 Mb. Mohon unggah file
                            HANYA dalam bentuk PDF/JPEG/png/jpg/webp/rar/zip</label>
                        <input type="file" class="form-control mt-1" placeholder="masukan file anda" name="file_lampiran"
                            id="file_lampiran" multiple />
                    </div><br>
                    <div class="form-group mt-3">
                        <label for="kode_otp">Kode OTP <span class="text-info">(dikirim ke email yang telah anda isi pada
                                langkah 5)</span><span class="text-danger"> *</span></label>

                        <p><br>Silahkan Klik 1 kali pada tombol minta OTP untuk pendapatkan kode OTP di Gmail <span
                                class="text-danger"> *</span></p>
                        <button type="button" id="kirim_otp_button" class="btn btn-primary w-100">Minta OTP</button>

                        <p><br><span class="text-danger">*</span>Tunggu sampai ada pemberitahuan bahwa kode OTP telah
                            dikirimkan melalui Email Anda.</p>
                        <p>Silahkan Check Email Anda!</p>

                        <div class="input-group">
                            <input type="text" class="form-control required" placeholder="Masukkan kode OTP"
                                name="kode_otp" id="kode_otp" aria-label="Recipient's username"
                                aria-describedby="button-addon2">
                            {{-- <button class="btn btn-outline-secondary" type="button" id="button-addon2">Kirim OTP</button> --}}
                        </div>

                        @if ($errors->has('kode_otp'))
                            <div class="alert alert-danger">Field is required.</div>
                        @endif
                    </div>
                    <div class="alert alert-warning mt-3">
                        <p>Kami memberitahu Anda 2 hal penting:</p>
                        <ul>
                            <li>
                                Jika orang yang diyakini bertanggung jawab atas pelecehan seksual tersebut bukan
                                mahasiswa atau staf UKDW, Universitas tidak dapat mengambil tindakan penyidikan
                                atau disiplin terhadap mereka (meskipun masalah ini dapat
                                dirujuk ke Polisi dan meskipun pihak UKDW telah melakukannya).
                            </li>
                            <li>
                                Jika orang yang diyakini bertanggung jawab atas pelecehan seksual tersebut
                                adalah mahasiswa atau staf UKDW, pihak UKDW akan menghubungi anda untuk
                                mendapatkan informasi lebih lanjut sebelum mengambil tindakan
                                penyidikan atau disiplin terhadap mereka.
                            </li>
                        </ul>
                        <p>Jika Anda telah memberikan kami informasi detail mengenai kontak Anda, kami akan
                            menghubungi Anda dengan metode pilihan yang telah anda pilih pada kuesioner ini.</p>
                        <br />
                        <p>
                            Setelah mengirimkan formulir ini, anda akan melihat Nomor Pelaporan dan URL untuk
                            melacak perkembangan status pelaporan anda. <b>Mohon dapat dicatat </b>. Selain itu,
                            jika anda memasukkan alamat email, maka nomor
                            pelaporan, URL status, dan salinan kuesioner akan dikirim ke alamat email anda.
                        </p>
                        <p>Jika anda mengalami kesulitan saat mengirimkan kuesioner ini, atau terdapat gangguan
                            internet. Mohon dapat mengirimkan ke email <span
                                class="text-primary">ppks@staff.ukdw.ac.id</span>
                        </p>
                    </div>
                    <div class="form-check ml-3">
                        <input type="checkbox" name="agree_terms" class="form-check-input" id="exampleCheck1" required />
                        <label class="form-check-label" for="exampleCheck1" required><b>Saya Setuju dengan
                                ketentuan di atas</b></label>
                    </div>
                    <div id="submit_button" class="f1-buttons float-end mt-4 mb-4">
                        <button type="button" id="button-back" name="previous_button"
                            class="btn btn-warning btn-previous"><i class="fa fa-arrow-left"></i>
                            Sebelumnya</button>
                        <button for="dagree_terms" type="submit" class="btn btn-success btn-submit"><i
                                class="fa fa-save"></i>
                            Kirim Aduan</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </form>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const btn_back = document.getElementById("button-back");

        btn_back.addEventListener("click", function() {
            window.location.href = '/langkah5'
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        const kirim_otp_button = document.getElementById("kirim_otp_button");
        const csrfToken = '{{ csrf_token() }}';

        kirim_otp_button.addEventListener("click", function() {
            // Kirim permintaan AJAX untuk mengirim OTP
            fetch('{{ route('send_otp') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'Content-Type': 'application/json'
                    }
                })
                // .then(response => {
                //     if (response.ok) {
                //         return response.text();
                //     }
                //     throw new Error('Ada masalah dalam mengirim OTP.');
                // })
                .then(data => {
                    alert("Kode OTP sudah terkirim, silahkan check email Anda!");
                })
                .catch(error => {
                    alert(error.message);
                });
        });
    });

    const verifyOTPRoute = "{{ route('verify_otp') }}";

    document.addEventListener("DOMContentLoaded", function() {
        console.log("Script loaded"); // Verifikasi apakah skrip berjalan

        const submitButton = document.getElementById("submit_button");
        if (!submitButton) {
            console.error("Button tidak ditemukan"); // Verifikasi elemen
            return;
        }

        submitButton.addEventListener("click", function() {
            console.log("Button clicked"); // Verifikasi klik berjalan
            fetch('{{ route('verify_otp') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        kode_otp: document.getElementById("kode_otp").value
                    })
                })
                .then(response => {
                    console.log("Response received:", response); // Verifikasi respons
                    if (response.ok) {
                        return response.json(); // Harapkan JSON
                    } else {
                        throw new Error("Kode OTP tidak sesuai, silahkan check email anda kembali!");
                    }
                })
                .then(data => {
                    console.log("Data received:", data); // Verifikasi data
                    if (data.success) {
                        alert("Berhasil mendapatkan kode trackingan: " + data.kode_tracking);
                        setTimeout(function() {
                            window.location.href = '{{ route('trackingAduan') }}';
                        }, 1000); // Tambahkan jeda sebelum redirect
                    } else {
                        alert(data.message);
                    }
                })
                .catch(error => {
                    console.error("Error:", error); // Penanganan kesalahan
                    alert("Terjadi kesalahan: " + error.message);
                });
        });
    });
</script>
