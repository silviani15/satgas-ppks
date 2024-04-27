<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Support\Str;

class AdminPetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petugas = User::all();
        return view('dashboard.petugas.index', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'username' => 'required|string|max:255|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:8',
        'role' => 'required|in:admin,petugas',
    ]);

    // $is_admin = $request->role === 'admin' ? 1 : 0;
    // $is_admin = $validatedData['role'];

    $user = new User();
    $user->name = $validatedData['name'];
    $user->username = $validatedData['username'];
    $user->email = $validatedData['email'];
    $user->password = Hash::make($validatedData['password']);
    $user->is_admin = $validatedData['role'];
    $user->save();

    return redirect('/dashboard/petugas')->with('success', 'Petugas berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $petugas = Petugas::find($id);

        if (!$petugas) {
            return "Petugas dengan ID $id tidak ditemukan.";
        }
        
        $role = $petugas->is_admin === 'admin' ? 'Admin' : 'Petugas';
        return view('dashboard.petugas.edit', compact('petugas', 'role'));
    }

    public function resetPassword(Request $request) {
        $request->validate([
            'new_password' => 'required|string|min:8',
        ]);

        $petugas = Petugas::find($request->id);
        try {
            if ($request->filled('new_password')) {
                $petugas->password = Hash::make($request->new_password);
                $petugas->save();
            }
            return redirect('/dashboard/petugas')->with('success', 'Password petugas berhasil direset.');
        } catch (\Exception $e) {
            return redirect('/dashboard/petugas')->with('error', 'Terjadi kesalahan saat mereset password.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $petugas)
    {
        // error_log('Data yang diterima sebelum validasi: ' . json_encode($request->all()));
        
        $rules = [
            'email' => 'required|email|unique:users,email,'.$petugas->id,
            'role' => 'required|in:admin,petugas',
            'new_password' => 'required|string|min:8',
        ];

        $validatedData = $request->validate($rules);

        // error_log('Data setelah validasi: ' . json_encode($validatedData));
        // error_log('Data yang diterima sebelum validasi: ' . json_encode($request->all())); 

        try {
            if ($request->filled('new_password')) {
                $petugas->password = Hash::make($validatedData['new_password']);
            }

            $petugas->email = $validatedData['email'];
            $petugas->is_admin = $validatedData['role'];
            $petugas->save();
            
            

            // dd('Data petugas berhasil diperbarui');
    
            return redirect('/dashboard/petugas')->with('success', 'Data petugas berhasil diperbarui.');
            } catch (\Exception $e) {
                // dd('Gagal memperbarui data petugas. Silakan coba lagi.');
                // error_log('Error saat update petugas: ' . $e->getMessage());
                
                return redirect('/dashboard/petugas')->with('error', 'Gagal memperbarui data petugas. Silakan coba lagi.');
            }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $petugas = User::findOrFail($id);
        $petugas->delete();
        return redirect('/dashboard/petugas')->with('danger', 'Petugas has been deleted!');
    }

    
    public function toggleStatus($id)
    {
        // Cari petugas berdasarkan ID
        $petugas = Petugas::findOrFail($id);

        // Ubah status petugas berdasarkan kondisi
        if ($petugas->activation_status === 'active') {
            $petugas->activation_status = 'inactive';
        } else {
            $petugas->activation_status = 'active';
        }

        // Simpan perubahan ke database
        $petugas->save();

        // Berikan feedback kepada pengguna
        return redirect()->back()->with('success', 'Status petugas berhasil diubah.');
    }
}