<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingHari extends Model
{
    use HasFactory;
    // Kolom-kolom yang bisa diisi
    protected $fillable = [
        'setting_name',
        'setting_value',
        'allowed_days'
    ];

    /**
     * Fungsi pembantu untuk mengambil nilai pengaturan berdasarkan namanya.
     */
    public static function get($settingName)
    {
        $setting = self::where('setting_name', $settingName)->first();
        return $setting ? $setting->setting_value : null;
    }
}
