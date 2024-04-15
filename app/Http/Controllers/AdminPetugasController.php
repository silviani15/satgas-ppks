<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    $is_admin = $request->role === 'admin' ? 1 : 0;

    $user = new User();
    $user->name = $validatedData['name'];
    $user->username = $validatedData['username'];
    $user->email = $validatedData['email'];
    $user->password = Hash::make($validatedData['password']);
    $user->is_admin = $is_admin;
    $user->save();

    return redirect('/dashboard/petugas')->with('success', 'Petugas berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function destroy($id)
    {
        $petugas = User::findOrFail($id);
        $petugas->delete();
        return redirect('/dashboard/petugas')->with('danger', 'Petugas has been deleted!');
    }
}