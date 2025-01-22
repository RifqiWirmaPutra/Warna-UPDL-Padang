<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\UabsensiPeserta;

class TelatAbsen extends Model
{
    use HasFactory;
    protected $fillable =[
        'waktu_absensi',
        'nip',
        'nama',
        'judul',
        'absensi',
        'jenis_permintaan_diklat',
        'tanggal_absensi',
        'penggantian_kuota',
        'no_hp',
        'alasan',
        'user_id',
        'arp_id',
    ];

    public function userPeserta()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
