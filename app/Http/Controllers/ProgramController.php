<?php

namespace App\Http\Controllers;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function showDetail($id)
    {
        // Menentukan data program secara langsung
        $programs = [
            [
                'penyelenggara' => 'Kementerian Pendidikan dan Kebudayaan, Riset, Dan Teknologi',
                'lokasi' => 'DKI Jakarta',
                'waktu' => '03 October 2023',
                'uraian' => 'RAPAT KOORDINASI NASIONAL SATUAN TUGAS PENCEGAHAN DAN PENANGANAN KEKERASAN SEKSUAL'
            ],
            [
                'penyelenggara' => 'Kementerian Pariwisata dan Ekonomi Kreatif',
                'lokasi' => 'Bali',
                'waktu' => '10 November 2023',
                'uraian' => 'Pameran Pariwisata Nasional 2023'
            ],
            [
                'penyelenggara' => 'Satgas UKDW',
                'lokasi' => 'Yogyakarta',
                'waktu' => '10 Juni 2023',
                'uraian' => 'Ngevlog'
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