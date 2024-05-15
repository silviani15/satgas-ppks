<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Notifications\NewComplaintNotification;

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

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        // Jika status_laporan tidak ditetapkan, gunakan default
        $this->status_laporan = $this->status_laporan ?? 'Belum divalidasi';
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::created(function ($pengaduan) {
    //         // Get the list of admin/petugas to notify
    //         $admins = User::where('is_admin', 'admin')->get();

    //         // Notify each admin/petugas
    //         foreach ($admins as $admin) {
    //             $admin->notify(new NewComplaintNotification($pengaduan));
    //         }
    //     });
    // }
}