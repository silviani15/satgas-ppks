<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(){
        return view('login.login', [
            "title" => "Login Admin",
            "active" => 'Login Admin',
        ]);

        
    }
    
    public function authenticate(Request $request) 
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        // Lakukan pengecekan status pengguna sebelum login
        $user = \App\Models\User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('loginError','Email atau Password salah!');
        }

        if ($user->activation_status === 'inactive') {
            Auth::logout();
            return back()->with('loginError', 'Akun Anda dinonaktifkan. Silahkan Hubungi admin untuk aktivasi.');
        }

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->with('loginError','Email atau Password salah!');
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}