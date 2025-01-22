<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Admin;

class JarAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        
        if (!$user) {
            abort(401); // Tidak ada pengguna, tidak diizinkan.
        }

        // Cek apakah pengguna memiliki peran "jar-admin"
        if ($user->role !== 'jar-admin') {
            abort(403); // Pengguna tidak diizinkan akses ke rute ini.
        }

        return $next($request);
    }
}
