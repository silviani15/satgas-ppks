<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;

class AdminPengaduanController extends Controller
{
    /**
     * Display a listing of the resource.   
     */
    public function index()
    {
        $pengaduan = Pengaduan::all();
        return view('dashboard.pengaduan.index', compact('pengaduan'));
    }

    public function dashboard()
        {
            $total_pengaduan = Pengaduan::count();
            $pengaduan_Diproses = Pengaduan::where('status_laporan', 'Diproses')->count();
            $pengaduan_Selesai = Pengaduan::where('status_laporan', 'Selesai')->count();
            $pengaduan_Ditolak = Pengaduan::where('status_laporan', 'Ditolak')->count();
            
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

        return redirect()->route('admin.pengaduan.index')
            ->with('success', 'Pengaduan berhasil disimpan.');
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

        // Mengubah status_laporan berdasarkan status
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

    public function reject($id)
    {
        $pengaduan = Pengaduan::findOrFail($id); // Temukan pengaduan
        $pengaduan->status_laporan = "Ditolak"; // Ubah status laporan menjadi "selesai"

        // Simpan perubahan
        $pengaduan->save();

        // Redirect dengan pesan flash
        return redirect()->route('pengaduan.index')->with('danger', 'Pengaduan berhasil ditolak dan dianggap selesai.');
    }

    public function exportPDF()
    {
        // $pengaduan = Pengaduan::all();
        // return view('dashboard.exportPDF.index', compact('pengaduan'));
    }

    public function updateStatus(Request $request, $id) {
        // Temukan pengaduan berdasarkan ID
        $pengaduan = Pengaduan::findOrFail($id);
    
        // Mendapatkan nilai dari request
        $status = $request->input('status'); // Nilai status dari request
    
        if ($status == "KS") {
            // Jika statusnya KS, maka ubah ke "Kekerasan Seksual"
            $pengaduan->status_laporan = "Kekerasan Seksual";
            // Lakukan aksi tambahan, misalnya, kirim ke proses selanjutnya
        } else {
            // Jika bukan KS, maka dianggap ditolak
            $pengaduan->status_laporan = "Bukan KS";
            // Lakukan aksi tambahan untuk pengaduan yang ditolak
        }
    
        $pengaduan->save(); // Simpan perubahan
    
        return redirect()->back()->with('success', 'Status pengaduan berhasil diperbarui.');
    }

}