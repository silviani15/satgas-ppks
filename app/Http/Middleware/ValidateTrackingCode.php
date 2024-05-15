<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Pengaduan;

class ValidateTrackingCode
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $kode_tracking = $request->input('kode_aduan');
        $pengaduan = Pengaduan::where('kode_tracking', $kode_tracking)->first();

        if (!$pengaduan) {
            return redirect('/tracking')->with('error', 'Data tidak ditemukan atau Anda tidak memiliki akses.');
        }

        return $next($request);
    }
}