<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class AdminPengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengaduans = Pengaduan::all();
        return view('dashboard.pengaduan.index', compact('pengaduans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pengaduan.create');
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
    public function show(string $id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('dashboard.pengaduan.show', compact('pengaduan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('dashboard.pengaduan.edit', compact('pengaduan'));
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
    public function destroy(string $id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        $pengaduan->delete();

        return redirect()->route('admin.pengaduan.index')
            ->with('success', 'Pengaduan berhasil dihapus.');
    }
}