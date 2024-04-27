<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PetugasMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();

        if ($user && $user->activation_status === 'inactive') {
            auth()->logout(); 
            return redirect('/login')->with('error', 'Akun Anda telah dinonaktifkan. Hubungi admin untuk aktivasi kembali.');
        }

        return $next($request);
    }
}