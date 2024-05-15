<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\NewComplaintNotification;
use App\Models\Pengaduan;
use App\Models\User;

class ComplaintController extends Controller
{
    public function store(Request $request)
    {
        // Logika untuk menyimpan pengaduan
        $complaint = new Pengaduan($request->all());
        $complaint->save();

        // Mengirim notifikasi ke admin
        $adminUser = User::where('role', 'admin')->first(); // Misalnya admin adalah user dengan role 'admin'
        $adminUser->notify(new NewComplaintNotification());

        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan berhasil ditambahkan');
    }
}