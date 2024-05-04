<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Support\Facades\Session;

class TrackingController extends Controller
{
    public function tracking(){
        return view('main.tracking', [
            "title" => "Tracking Aduan",
            "active" => 'Tracking Aduan',
    ]);
    }
    
    // public function trackingAduan($kode_tracking)
    // {
    //     // $aduan = Pengaduan::all(); 
    //     $aduan = Pengaduan::where('kode_tracking', $kode_tracking)->firstOrFail();
        
    //     return view('main.tracking', [
    //         'title' => 'Tracking Aduan',
    //         'active' => 'Tracking Aduan',
    //         'aduan' => $aduan, 
    //     ]);
    // }
    
    // public function konfirmasiAduan() {
    //     $kode_tracking = session('kode_tracking');

    //     if ($kode_tracking) {
    //         return view('tracking.index', [
    //             'title' => 'Konfirmasi Aduan',
    //             'active' => 'Konfirmasi Aduan',
    //             'kode_tracking' => $kode_tracking,
    //         ]);
    //     } else {
    //         return redirect()->route('langkah1')->with('error', 'Tidak ada data aduan. Mulailah dari awal.');
    //     }
    // }

    public function detailtracking(Request $request) {
        $kode_tracking = $request->input('kode_aduan'); // Dapatkan kode tracking dari input
        $pengaduan = Pengaduan::where('kode_tracking', $kode_tracking)->first(); // Cari pengaduan berdasarkan kode tracking

        if (!$pengaduan) {
            return redirect()->back()->with('error', 'Data tidak ditemukan. Pastikan kode tracking benar.');
        }

        // Ambil tanggapan yang terkait dengan pengaduan ini
        $tanggapan = Tanggapan::where('pengaduan_id', $pengaduan->id)->orderBy('created_at', 'desc')->get();

        return view('main.detailtracking', [
            'title' => 'Detail Tracking Aduan',
            'active' => 'Tracking Aduan',
            'kode_tracking' => $pengaduan->kode_tracking,
            'status_laporan' => $pengaduan->status_laporan ?? 'Belum divalidasi', 
            'tanggapan' => $tanggapan, 
        ]);
    }
    
    public function index()
    {
        $kode_tracking = Session::get('kode_tracking');
        // dd($kode_tracking);
        
        return view('tracking.index', [
            'title' => 'Kode Tracking Aduan',
            'active' => 'Tracking Aduan',
            'kode_tracking' => $kode_tracking,
        ]);
    }
}