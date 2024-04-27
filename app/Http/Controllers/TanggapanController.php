<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanggapan;
use App\Models\Pengaduan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($pengaduan_id)
    {
        // $pengaduan = Pengaduan::find($pengaduan_id);

        // if (!$pengaduan) {
        //     abort(404, 'Pengaduan tidak ditemukan');
        // }

        // return view('dashboard.tanggapan.index', compact('pengaduan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($pengaduan_id)
    {
        $pengaduan = Pengaduan::findOrFail($pengaduan_id);
        return view('dashboard.pengaduan.tanggapan', compact('pengaduan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());
        // echo $user_id = ;
        // echo "</pre>";
        // die();
        
        // $request->validate([
        //     'pengaduan_id' => 'required|exists:pengaduans,id',
        //     'tgl_tanggapan' => 'required|date',
        //     'tanggapan' => 'required',
        // ]);

        // dd('Form submitted', $request->all(), Auth::guard('petugas')->user());
        $tanggapan = new Tanggapan();
        $tanggapan->tgl_tanggapan = Carbon::now();
        $tanggapan->pengaduan_id = $request->input('pengaduan_id'); 
        $tanggapan->tanggapan = $request->input('tanggapan');
        $tanggapan->petugas_id = Auth::user()->id;
        $tanggapan->save();
        // print_r($tanggapan);
        // die();
        return redirect()->back(); 

        // Tanggapan::create($request->all());

        // return redirect()->route('dashboard.pengaduan.show', ['pengaduan' => $pengaduan_id])
        //     ->with('success', 'Tanggapan berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $tanggapan = Tanggapan::findOrFail($id);

        // return view('dashboard.tanggapan.show', compact('tanggapan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tanggapan::findOrFail($id)->delete();

        return redirect()->route('dashboard.tanggapan.index')
                         ->with('success', 'Tanggapan berhasil dihapus.');
    }
}