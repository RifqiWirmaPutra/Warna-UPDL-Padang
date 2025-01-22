<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Arp;

class UabsensiPeserta extends Model
{
    use HasFactory;
    protected $fillable =[
        'nip',
        'nama',
        'judul',
        'jenis_permintaan_diklat',
        'tanggal_absensi',
        'penggantian_kuota',
        'no_hp',
        'absensi',
        'user_id',
        'arp_id',
    ];

    //relasi
    public function users()
    {
        return $this->hasMany(User::class, 'user_id', 'id');
    }
    public function arp()
    {
        return $this->hasMany(Arp::class, 'arp_id', 'id');
    }

}
