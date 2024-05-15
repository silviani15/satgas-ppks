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
                            <a href="/dashboard/pengaduan"><i class="fas fa-arrow-circle-left fa-2x"></i></a>
                            <h4>{{ $pengaduan->status_laporan }}</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <h1 class="text-center mt-4">Detail Pengaduan</h1>
                            <div class="row mt-1">
                                <div class="col-md-9 col-xl-12" style="margin-top: 3%">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Apakah Kamu?</h5>
                                                <h6>{{ $pengaduan->apakah_kamu }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Individu yang terkena dampak pelecehan seksual
                                                    merupakan? </h5>
                                                <h6>{{ $pengaduan->individu_terkena_dampak }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Apakah insiden kekerasan seksual tersebut
                                                    berhubungan dengan UKDW
                                                    (Misal terjadi di kampus UKDW atau Organisasi Mahasiswa UKDW atau selama
                                                    beraktivitas di UKDW seperti Studi Banding atau Magang)?</h5>
                                                <h6>{{ $pengaduan->berhubungan_dengan_ukdw }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Dimana insiden pelecehan tersebut terjadi ?</h5>
                                                <h6>{{ $pengaduan->tempat_insiden }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Apakah ada sesuatu yang ingin anda tambahkan
                                                    mengenai Lokasi kejadian?
                                                    Jika kamu memilih "Berbagai tempat/kejadian", tolong sebutkan
                                                    tempat/kejadiannya?</p>
                                                    <h6>{{ $pengaduan->lokasi_kejadian }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Kapan peristiwa pelecehan tersebut terjadi :</p>
                                                    <h6>{{ $pengaduan->waktu_peristiwa }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Apakah insiden pelecehan tersebut terjadi lebih
                                                    dari satu kali?</p>
                                                    <h6>{{ $pengaduan->kuantitas_insiden }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Apakah masih terjadi?</p>
                                                    <h6>{{ $pengaduan->apakah_masih_terjadi }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Apa yang terjadi?</p>
                                                    <h6>{{ $pengaduan->uraian_kejadian }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Apakah anda pernah mencoba salah satu Layanan
                                                    dibawah ini?</p>
                                                    <h6>{{ $pengaduan->layanan_dicoba }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Tindakan seperti apa yang anda inginkan untuk
                                                    dilakukan oleh UKDW?</p>
                                                    <h6>{{ $pengaduan->tindakan_dicoba }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Seseorang yang bertanggung jawab atas Pelecehan
                                                    Seksual tersebut ialah
                                                    </p>
                                                    <h6>{{ $pengaduan->orang_yang_bertanggungjawab }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Nama Lengkap terlapor</p>
                                                    <h6>{{ $pengaduan->nama_terlapor }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Nomor Handphone terlapor</p>
                                                    <h6>{{ $pengaduan->nomor_telepon_terlapor }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Email terlapor</p>
                                                    <h6>{{ $pengaduan->email_terlapor }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Informasi Identitas Lainnya</p>
                                                    <h6>{{ $pengaduan->identitas_lainnya_terlapor }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Jika Anda tidak dapat/memilih untuk tidak
                                                    mengungkapkannya, silakan
                                                    pilih pilihan berikut</p>
                                                    <h6>{{ $pengaduan->alasan_merahasiakan }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Saya memilih untuk tetap anonim</p>
                                                    <h6>{{ $pengaduan->status_anonim }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Nama Lengkap</p>
                                                    <h6>{{ $pengaduan->nama_pelapor }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Jenis Kelamin</p>
                                                    <h6>{{ $pengaduan->jenis_kelamin }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Usia</p>
                                                    <h6>{{ $pengaduan->usia_pelapor }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Nomor Handphone</p>
                                                    <h6>{{ $pengaduan->nomor_telepon_pelapor }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Email</p>
                                                    <h6>{{ $pengaduan->email_pelapor }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Dapat dihubungi melalui</p>
                                                    <h6>{{ $pengaduan->dihubungi_lewatu }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Jika Anda memilih untuk dihubungi dengan cara
                                                    lainnya, mohon
                                                    tuliskan disini:</p>
                                                    <h6>{{ $pengaduan->dihubungi_lewat_lainnya }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Lampirkan bukti/file pendukung (Hanya diperlukan
                                                    jika
                                                    menurut Anda dapat membantu). Bukti pendukung tidak lebih dari 10 Mb.
                                                    Mohon unggah file
                                                    HANYA dalam bentuk PDF/JPEG/png/jpg/webp/rar/zip</p>
                                                    <img src="{{ asset('storage/' . $pengaduan->file_lampiran) }}" alt="Bukti Lampiran"
                                                        style="max-width: 100%; height: auto;">
                                                    @if ($pengaduan->file_lampiran && preg_match('/\.(jpeg|jpg|png|webp)$/i', $pengaduan->file_lampiran))
                                                    @else
                                                        <p>{{ $pengaduan->file_lampiran }}</p>
                                                    @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Kode OTP</p>
                                                    <h6>{{ $pengaduan->kode_otp }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 col-xl-12">
                                    <div class="card shadow mb-3">
                                        <div class="card-body">
                                            <div class="d-flex flex-column">
                                                <h5 style="color: #007663">Kode Tracking</p>
                                                    <h6>{{ $pengaduan->kode_tracking }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer" style="margin-top: 4%">
                            <div class="d-flex justify-content-between">
                                <form action="{{ route('petugas.statusOnchange', ['id' => $pengaduan->id]) }}"
                                    method="post">
                                    @csrf
                                    <select name="status" class="form-control w-25" style="width: 180%!important"
                                        onchange="javascript:this.form.submit()">
                                        <option style="" value="0" @if ($pengaduan->status == 0) selected @endif>--Untuk Mengubah Status--</option>
                                        <option value="proses" @if ($pengaduan->status == 'proses') selected @endif>Proses</option>
                                        <option value="selesai" @if ($pengaduan->status == 'selesai') selected @endif>Selesai</option>
                                    </select>
                                    <div class="input-group-append" name="status"
                                        style="position: absolute; top: 94.6%; right: 65%;">
                                        <span class="text"><i class="fa fa-caret-down"></i></span>
                                    </div>
                                </form>
                                <a href="{{ route('tanggapan.create', ['pengaduan' => $pengaduan->id]) }}"
                                    class="btn" style="background-color: #007663; color:aliceblue">Tanggapi</a>
                            </div>
                        </div>
                    </div>
                    <div class="card card-body shadow mt-3">
                        <div class="card-header">
                            <h4>Tanggapan</h4>
                        </div>
                        <div class="card-body" style="text-align: justify;">
                            @if ($tanggapan->isEmpty())
                                <p>Tidak ada tanggapan untuk pengaduan ini.</p>
                            @else
                                @foreach ($tanggapan as $item)
                                    <div>
                                        <strong>Tanggal Tangggapan:</strong> {{ date('d-m-Y', strtotime($item->tgl_tanggapan)) }}<br>
                                        <strong>Isi:</strong> {{ $item->tanggapan }}
                                        <hr>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
