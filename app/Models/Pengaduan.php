<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $fillable = [
        'id_pengaduan',
        'apakah_kamu',
        'individu_terkena_dampak',
        'berhubungan_dengan_ukdw',
        'tempat_insiden',
        'lokasi_kejadian',
        'waktu_peristiwa',
        'kuantitas_insiden',
        'apakah_masih_terjadi',
        'uraian_kejadian',
        'layanan_dicoba',
        'tindakan_dicoba',
        'orang_yang_bertanggungjawab',
        'nama_terlapor',
        'nomor_telepon_terlapor',
        'email_terlapor',
        'identitas_lainnya_terlapor',
        'alasan_merahasiakan',
        'status_anonim',
        'nama_pelapor',
        'jenis_kelamin',
        'usia_pelapor',
        'nomor_telepon_pelapor',
        'email pelapor',
        'dihubungi_lewat',
        'dihubungi_lewat_lainnya',
        'file_lampiran',
        'kode_otp',
        'agree_term',
        'kode_tracking',
        
        'status_laporan',

        'tgl_pengaduan',
        'email_pelapor',
        'bagian_ukdw',
    ];
    
    public function tanggapan()
    {
        return $this->hasMany(Tanggapan::class);
    }
}