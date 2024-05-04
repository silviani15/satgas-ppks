<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckTrackingCode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $kode_tracking = $request->input('kode_tracking'); 
        $kode_tracking = $request->session()->get('kode_tracking');
        
        if (!$kode_tracking) {
            return redirect('/tracking')->with('error', 'Anda tidak memiliki akses.');
        }
        
        return $next($request);
    }
}