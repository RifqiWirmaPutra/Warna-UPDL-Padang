<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SettingHari;

class SettingHariController extends Controller
{
    public function settings()
{
    return view('admin.setting_hari');
}

// public function updateSettings(Request $request)
// {
//     // Validasi input
//     $request->validate([
//         'confirmation_start_time' => 'required|date_format:H:i',
//         'confirmation_end_time' => 'required|date_format:H:i|after:confirmation_start_time',
//         'absence_start_time' => 'required|date_format:H:i',
//         'absence_end_time' => 'required|date_format:H:i|after:absence_start_time',
//     ]);
//     $allowedDays = implode(',', $request->input('allowed_days', []));
//     \App\Models\SettingHari::updateOrCreate(['setting_name' => 'allowed_days'], ['setting_value' => $allowedDays]);

//     // Update pengaturan
//     \App\Models\SettingHari::updateOrCreate(['setting_name' => 'confirmation_start_time'], ['setting_value' => $request->confirmation_start_time]);
//     \App\Models\SettingHari::updateOrCreate(['setting_name' => 'confirmation_end_time'], ['setting_value' => $request->confirmation_end_time]);
//     \App\Models\SettingHari::updateOrCreate(['setting_name' => 'absence_start_time'], ['setting_value' => $request->absence_start_time]);
//     \App\Models\SettingHari::updateOrCreate(['setting_name' => 'absence_end_time'], ['setting_value' => $request->absence_end_time]);

//     return redirect()->route('settings.absensi')->with('success', 'Pengaturan berhasil diperbarui!');
// }
public function updateSettings(Request $request)
{
    // Validasi input
    $request->validate([
        'confirmation_start_time' => 'nullable|date_format:H:i',
        'confirmation_end_time' => $request->filled('confirmation_start_time') ? 'required|date_format:H:i|after:confirmation_start_time' : 'nullable',
        'absence_start_time' => 'nullable|date_format:H:i',
        'absence_end_time' => $request->filled('absence_start_time') ? 'required|date_format:H:i|after:absence_start_time' : 'nullable',
    ]);
    $allowedDays = implode(',', $request->input('allowed_days', []));
    \App\Models\SettingHari::updateOrCreate(['setting_name' => 'allowed_days'], ['setting_value' => $allowedDays]);

    // Update pengaturan
    if ($request->filled('confirmation_start_time')) {
        \App\Models\SettingHari::updateOrCreate(['setting_name' => 'confirmation_start_time'], ['setting_value' => $request->confirmation_start_time]);
        \App\Models\SettingHari::updateOrCreate(['setting_name' => 'confirmation_end_time'], ['setting_value' => $request->confirmation_end_time]);
    } else {
        \App\Models\SettingHari::where('setting_name', 'confirmation_start_time')->delete();
        \App\Models\SettingHari::where('setting_name', 'confirmation_end_time')->delete();
    }

    if ($request->filled('absence_start_time')) {
        \App\Models\SettingHari::updateOrCreate(['setting_name' => 'absence_start_time'], ['setting_value' => $request->absence_start_time]);
        \App\Models\SettingHari::updateOrCreate(['setting_name' => 'absence_end_time'], ['setting_value' => $request->absence_end_time]);
    } else {
        \App\Models\SettingHari::where('setting_name', 'absence_start_time')->delete();
        \App\Models\SettingHari::where('setting_name', 'absence_end_time')->delete();
    }

    return redirect()->route('settings.absensi')->with('success', 'Pengaturan berhasil diperbarui!');
}


}
