<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function materi(){
        return view('main.materi', ["title" => "Materi Satgas",
        "active" => 'Materi Satgas',
    ]);
    }
    
    public function detailmateri()
    {
        return view('main.detailmateri', [
            "title" => "Detail Materi Satgas", 
            "active" => "Materi Satgas"
        ]);
    }
}