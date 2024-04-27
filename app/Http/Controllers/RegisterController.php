<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('register.register', [
            "title" => "Register",
            "active" => 'Login Admin',
        ]);
    }
    
    public function store(Request $request) 
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // dd($validatedData);
        // Debug setelah validasi
        error_log('Data after validation: ' . print_r($validatedData, true));

        $validatedData['password'] = bcrypt($validatedData['password']);
        // $validatedData['password'] = Hash::make($validatedData['password']);
        
        // dd($validatedData);
        // Debug setelah hashing
        error_log('Data before creating user: ' . print_r($validatedData, true));
        
        User::create($validatedData);
        
        // $request->session()->flash('success', 'Registration successfull! Please login');
        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}