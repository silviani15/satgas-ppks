<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function detail()
    {
        return view('main.detailmateri', [
            "title" => "Materi Satgas", 
            "active" => "Materi Satgas"
        ]);
    }
}