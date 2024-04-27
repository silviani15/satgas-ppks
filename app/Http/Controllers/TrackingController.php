<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Session;

class TrackingController extends Controller
{
    public function tracking(){
        return view('main.tracking', [
            "title" => "Tracking Aduan",
            "active" => 'Tracking Aduan',
    ]);
    }
    
    public function trackingAduan()
    {
        $aduan = Pengaduan::all(); 
        
        return view('main.tracking', [
            'title' => 'Tracking Aduan',
            'active' => 'Tracking Aduan',
            'aduan' => $aduan, 
        ]);
    }

    public function detailtracking()
    {   
        // $pengaduan = Pengaduan::with('tanggapan')->findOrFail($id);
        
        return view('main.detailtracking', [
            'title' => 'Tracking Aduan',
            'active' => 'Tracking Aduan',
            // 'pengaduan' => $pengaduan,
        ]);
    }
    
    public function index()
    {
        $kode_tracking = Session::get('kode_tracking');

        return view('tracking.index', [
            'title' => 'Tracking Aduan',
            'active' => 'Tracking Aduan',
            'kode_tracking' => $kode_tracking,
        ]);
    }
}