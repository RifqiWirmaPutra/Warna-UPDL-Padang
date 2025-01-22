<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Admin;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $user = $request->user();
    
    if (!$user) {
        abort(401); // Tidak ada pengguna, tidak diizinkan.
    }

    // Cek apakah pengguna memiliki salah satu dari peran yang diizinkan
    if (!in_array($user->role, $roles)) {
        abort(403); // Pengguna tidak diizinkan akses ke rute ini.
    }

    return $next($request);
        // if ($request->user()->role == Admin::ROLE_SUPERADMIN){

        //     return $next($request);

        // }else{
        //     abort(401);
        // }
        // if ($request->user()->role == Admin::ROLE_SUPERADMIN){

        //     return $next($request);

        // }elseif ($request->user()->role == Admin::ROLE_AdminJar){
        //     return $next($request);
        // }elseif ($request->user()->role == Admin::ROLE_AdminPelayanan){
        //     return $next($request);
        // }elseif ($request->user()->role == Admin::ROLE_AdminKeuangan){
        //     return $next($request);
        // }elseif ($request->user()->role == Admin::ROLE_AdminPmk){
        //     return $next($request);
        // }
        // else{
        // abort(401);
        // }
        
    }
}
