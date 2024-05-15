<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Notifications\NewComplaintNotification;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Log;

class AdminPengaduanController extends Controller
{
    /**
     * Display a listing of the resource.   
     */
    
     public function index(Request $request)
     {
         $status = $request->input('status');
         $kode_tracking = $request->input('kode_tracking');
     
         $query = Pengaduan::query();
     
         if ($status && $status !== "") {
             $query->where('status_laporan', $status);
         }
     
         if ($kode_tracking && $kode_tracking !== "") {
             $query->where('kode_tracking', 'like', '%' . $kode_tracking . '%');
         }
     
         $pengaduan = $query->orderBy('id', 'asc')->get();
     
         return view('dashboard.pengaduan.index', compact('pengaduan'));
     }

    public function dashboard()
        {
            $total_pengaduan = Pengaduan::count();
            $pengaduan_Diproses = Pengaduan::where('status_laporan', 'Diproses')->count();
            $pengaduan_Selesai = Pengaduan::where('status_laporan', 'Selesai')->count();
            $pengaduan_Ditolak = Pengaduan::where('status_laporan', 'Bukan KS')->count();
            
            return view('dashboard.dashboard', compact('total_pengaduan', 'pengaduan_Diproses', 'pengaduan_Selesai', 'pengaduan_Ditolak'));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('dashboard.pengaduan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tgl_pengaduan' => 'required',
            'email' => 'required|email',
            'bagian_ukdw' => 'required',
            'status_laporan' => 'required'
        ]);

        Pengaduan::create($request->all());

        // $recipients = User::whereIn('is_admin', ['admin', 'petugas'])->get();

        // // Kirim notifikasi ke semua admin dan petugas
        // Notification::send($recipients, new NewComplaintNotification());

        return redirect()->route('admin.pengaduan.index')->with('success', 'Pengaduan berhasil disimpan.');

        // $validated = $request->validate([
        //     'tgl_pengaduan' => 'required',
        //     'email' => 'required|email',
        //     'bagian_ukdw' => 'required',
        //     'status_laporan' => 'required'
        // ]);
    
        // $pengaduan = Pengaduan::create($validated); // Membuat pengaduan baru
    
        // // Kirim notifikasi setelah pengaduan dibuat
        // $recipients = User::whereIn('is_admin', ['admin', 'petugas'])->get();
        // Notification::send($recipients, new NewComplaintNotification($pengaduan));
    
        // return redirect()->route('admin.pengaduan.index')->with('success', 'Pengaduan berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $id = intval($id); 
        $pengaduan = Pengaduan::findOrFail($id);
        $tanggapan = Tanggapan::where('pengaduan_id', $pengaduan->id)->orderBy('created_at', 'desc')->get();

    return view('dashboard.pengaduan.show', compact('pengaduan', 'tanggapan'));
    }

    public function statusOnchange($id) 
    {
        $pengaduan = Pengaduan::findOrFail($id);

        $status = request()->input('status');
        $pengaduan->status_laporan = $status;

        if ($status == "proses") {
            $pengaduan->status_laporan = "Diproses";
        } else if ($status == "selesai") {
            $pengaduan->status_laporan = "Selesai";
        } else {
            $pengaduan->status_laporan = "Belum divalidasi";
        }

        $pengaduan->save();

        return redirect()->back();
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $pengaduan = Pengaduan::findOrFail($id);
        // return view('dashboard.pengaduan.edit', compact('pengaduan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tgl_pengaduan' => 'required',
            'email' => 'required|email',
            'bagian_ukdw' => 'required',
            'status_laporan' => 'required'
        ]);

        $pengaduan = Pengaduan::findOrFail($id);
        $pengaduan->update($request->all());

        return redirect()->route('admin.pengaduan.index')
            ->with('success', 'Pengaduan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // $pengaduan = Pengaduan::findOrFail($id);
        // $pengaduan->delete();

        // return redirect()->back()->with('danger', 'Pengaduan berhasil dihapus.');
    }
    
    public function updateStatus(Request $request, $id) {
        $pengaduan = Pengaduan::findOrFail($id);
    
        $status = $request->input('status'); 
        if ($status == "KS") {
            $pengaduan->status_laporan = "Kekerasan Seksual";
        } else {
            $pengaduan->status_laporan = "Bukan KS";
        }
    
        $pengaduan->save(); 
    
        return redirect()->back()->with('success', 'Status pengaduan berhasil diperbarui.');
        // $recipients = User::whereIn('is_admin', ['admin', 'petugas'])->get();
        // Notification::send($recipients, new NewComplaintNotification($pengaduan));

        // return redirect()->back()->with('success', 'Status pengaduan berhasil diperbarui.');
    }

    public function rekomendasi($id, Request $request)
    {
        $pengaduan = Pengaduan::findOrFail($id);

        $pengaduan->status_laporan = "Selesai";
        $pengaduan->save();

        Tanggapan::create([
            'pengaduan_id' => $pengaduan->id,
            'petugas_id' => auth()->id(),
            'tanggapan' => 'Diberikan rekomendasi, tidak ada penanganan lebih lanjut. Terimakasih',
            'tgl_tanggapan' => now(), 
        ]);

        return redirect()->back()->with('warning', 'Pengaduan direkomendasikan.');
    }

}