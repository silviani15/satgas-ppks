<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PengaduanController extends Controller
{
    public function index()
    {
        $pengaduans = Pengaduan::all();
        return view('pengaduan.index', compact('pengaduans'));
    }

    public function detail($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('pengaduan.detail', compact('pengaduan'));
    }
}