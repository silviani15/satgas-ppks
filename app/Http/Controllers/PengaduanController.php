<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Notifications\NewComplaintNotification;

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

    public function store(Request $request)
    {
        $pengaduan = Pengaduan::create($request->all());
        
        // Asumsikan Anda memberikan notifikasi kepada user tertentu, misalnya admin
        $relevantUserId = 1; // Gantilah dengan ID user yang relevan
        $user = User::find($relevantUserId);

        if ($user) {
            $user->notify(new NewComplaintNotification($pengaduan));
        }

        return response()->json(['message' => 'Pengaduan created and notification sent.']);
    }
}