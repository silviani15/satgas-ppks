<?php

namespace App\Http\Controllers;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function program(){
        return view('main.program', ["title" => "Program Satgas",
        "active" => 'Program Satgas',
    ]);
    }
    
    public function showDetail($id)
    {
        // Menentukan data program secara langsung
        $programs = [
            [
                'Penyelenggara' => 'Koordinator Nasional PPKS',
                'Lokasi' => 'DKI Jakarta',
                'Waktu' => '03 October 2023',
                'Uraian' => 'Koordinasi Nasional PPKS bersama Bapak Menteri Pendidikan,Kebudayaan,Riset dan Teknologi Republik Indonesia'
            ],
            [
                'Penyelenggara' => 'SATGAS PPKS DI RANGKAIAN OKA',
                'Lokasi' => 'Universitas Kristen Duta Wacana',
                'Waktu' => '22 Maret 2024',
                'Uraian' => 'Satuan Tugas Pencegahan dan Penanganan Kekerasan Seksual UKDW memberikan pemahaman untuk mencegah kekerasan seksual demi untuk #ukdwkampusaman'
            ],
            [
                'Penyelenggara' => 'SATGAS PPKS UKDW DAN SATGAS PPKS UAJY',
                'Lokasi' => 'Yogyakarta',
                'Waktu' => '10 Juni 2023',
                'Uraian' => 'Mengadakan lomba video pendek "Women Support Women", Tujuannya Meningkatkan kesadaran tentang kekerasan seksual di lingkungan kampus melalui pesan yang kuat dan menyentuh dalam video. '
            ],
        ];
        
        // Mencari program dengan ID yang sesuai
        $program = $programs[$id - 1]; // Mengurangi 1 karena array dimulai dari indeks 0
        
        // Mengirimkan data program ke view 'detailProgram'
        return view('main.detailProgram', [
            "title" => "Program Satgas", 
            "active" => "Program Satgas", 
            "program" => $program 
        ]);
    }
}