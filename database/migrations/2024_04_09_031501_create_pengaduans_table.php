<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->enum('apakah_kamu', ['Individu yang pernah mengalami sebuah insiden pelecahan seksual', 'Individu yang membantu orang lain yang mengalami sebuah pelecehan seksual', 'Responden dari UKDW', 'Bagian Unit Pengaduan (Misal. Satpam, atau yang memiliki wewenang untuk membantu seseorang yang mengalami insiden pelecehan seksual)', 'Individu yang menyaksikan sebuah insiden pelecehan seksual', 'Memilih untuk tidak mengungkapkan identitas'])->nullable();
            $table->enum('individu_terkena_dampak', ['Bagian dari UKDW (Misalnya : Tamu, Pegawai Kantin, Tukang di lingkungan UKDW)', 'Alumni UKDW', 'Mahasiswa aktif UKDW', 'Staff UKDW yang masih aktif bekerja', 'Staff UKDW yang telah pensiun', 'Masyarakat umum'])->nullable();
            $table->enum('berhubungan_dengan_ukdw', ['Ya', 'Tidak', 'Tidak Yakin'])->nullable();
            $table->enum('tempat_insiden', ['Selama perjalanan (Misal. Mobil Online)', 'Selama kegiatan diluar Kampus UKDW', 'Diluar lingkungan kampus dan sedang tidak ada kegiatan apapun di UKDW', 'Saat mengikuti kegiatan UKDW diluar lingkungan kampus', 'Saat di Transportasi Publik', 'Sosial Media (Online)', 'Saat Perjalanan Pribadi', 'Perjalanan yang diatur oleh UKDW', 'Perjalanan yang beruhubungan dengan UKDW', 'UKDW Yogyakarta', 'Klinik UKDW', 'Perpustakaan UKDW', 'Lapangan UKDW', 'Studi Banding UKDW', 'Saat Magang di UKDW', 'Berbagi tempat / Kejadian', 'Tidak Yakin', 'Lainnya'])->nullable();
            $table->string('lokasi_kejadian')->nullable();
            $table->enum('waktu_peristiwa', ['Dalam 3x24 jam terakhir', 'Dalam 5 bulan terakhir', 'Dalam 12 bulan terakhir', 'Lebih dari 1 tahun, kurang dari 3 tahun', 'Lebih dari 5 tahun yang lalu', 'Lebih dari 10 tahun yang lalu'])->nullable();
            $table->boolean('kuantitas_insiden', )->default(false);
            $table->boolean('apakah_masih_terjadi')->default(false);
            $table->text('uraian_kejadian')->nullable();
            $table->integer('layanan_dicoba')->nullable();
            $table->integer('tindakan_dicoba')->nullable();
            $table->enum('orang_yang_bertanggungjawab', ['Orang yang memiliki hubungan dengan UKDW (Misal. Tamu, Pekerja di lingkungan UKDW)', 'Alumni dari UKDW', 'Mahasiswa UKDW', 'Staff UKDW yang bekerja saat ini', 'Masyarakat Umum'])->nullable();
            $table->string('nama_terlapor')->nullable();
            $table->string('nomor_telepon_terlapor')->nullable();
            $table->string('email_terlapor')->nullable();
            $table->string('identitas_lainnya_terlapor')->nullable();
            $table->enum('alasan_merahasiakan', ['Saya / Orang yang melaporkan kejadian tersebut tidak mengetahui nama orang tersebut', 'Saya / Orang yang melaporkan kejadian tersebut tidak ingin mengungkapkan nama orang tersebut', 'Saya / Orang yang melaporkan kejadian tersebut akan memberitahukan setelah mendapatkan informasi lebih lanjut'])->nullable();
            $table->boolean('status_anonim')->default(false);
            $table->string('nama_pelapor')->nullable();
            $table->enum('jenis_kelamin', ['Perempuan', 'Laki-laki', 'Lainnya'])->nullable();
            $table->integer('usia_pelapor')->nullable();
            $table->string('nomor_telepon_pelapor')->nullable();
            $table->string('email_pelapor')->nullable();
            $table->enum('dihubungi_lewat', ['Whatsapp', 'DM Instagram', 'SMS', 'Email', 'Lainnya'])->nullable();
            $table->string('dihubungi_lewat_lainnya')->nullable();
            $table->string('file_lampiran')->nullable();
            $table->string('kode_otp')->nullable();
            $table->boolean('agree_terms')->default(false); 
            $table->string('kode_tracking')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
    
};