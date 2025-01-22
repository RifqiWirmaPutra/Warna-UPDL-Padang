<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UdaftarHadir;



class CheckAbsensi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Pastikan pengguna telah login
        if (Auth::check()) {
            $user = Auth::user();

            // Periksa apakah pengguna sudah mengambil absen
            if (!$user->hasTakenAbsensi()) {
                return $next($request);
            }
        }

        return redirect()->route('udh.index')->with('error', 'Anda sudah mengambil absen.');

        return $next($request);
    }
}
