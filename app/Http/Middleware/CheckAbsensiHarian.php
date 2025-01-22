<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UabsensiPeserta;
use App\Models\SettingHari;
use App\Http\Controllers\UabsensiPesertaController;

class CheckAbsensiHarian
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $currentHour = Carbon::now('Asia/Jakarta')->hour;
        $absenceStartTime = SettingHari::get('absence_start_time');
        $absenceEndTime = SettingHari::get('absence_end_time');
        $allowedDays = explode(',', SettingHari::get('allowed_days'));
        $currentDay = Carbon::now('Asia/Jakarta')->dayOfWeek;

        if (!in_array($currentDay, $allowedDays)) {
            return redirect()->route('dashboard')->with('error', 'Absensi tidak diizinkan hari ini.');
        }

        if ($currentHour < intval(substr($absenceStartTime, 0, 2)) || $currentHour >= intval(substr($absenceEndTime, 0, 2))) {
            if (Auth::check()) {
                $user = Auth::user();
                $today = Carbon::today();
                $hasAbsenToday = UabsensiPeserta::where('user_id', $user->id)->whereDate('tanggal_absensi', $today)->exists();
    
                if ($hasAbsenToday) {
                    $statusAbsensi = 'Anda sudah absen hari ini.';
                    session(['statusAbsensi' => $statusAbsensi]);
                    return redirect()->route('dashboard')->with('success', $statusAbsensi);
                }
            }
            return redirect()->route('telat.absen')->with('error', 'Maaf, waktu absensi hanya dari jam ' . $absenceStartTime . ' sampai ' . $absenceEndTime . '.');
        }

        if (Auth::check()) {
            $user = Auth::user();
            $today = Carbon::today();
            $hasAbsenToday = UabsensiPeserta::where('user_id', $user->id)->whereDate('tanggal_absensi', $today)->exists();
            // Menambahkan logika untuk menyimpan status absensi pada variabel sesi
            $statusAbsensi = $hasAbsenToday ? 'Kehadiran berhasil di simpan.' : 'Belum absen hari ini.';
            session(['statusAbsensi' => $statusAbsensi]);
            if ($hasAbsenToday) {
                return redirect()->route('dashboard')->with('success', $statusAbsensi);
            }
            return $next($request);
        }
        return redirect()->route('login');
    }
}
