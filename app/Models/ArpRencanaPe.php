<?php

namespace App\Models;
use App\Models\Arp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArpRencanaPe extends Model
{
    use HasFactory;

    protected $fillable = [
        'nip',
        'nama',
        'tanggal_mulai',
        'tanggal_selesai',
        'kode',
        'judul',
        'angkatan',
        'verifikasi',
        'kehadiran',
    ];

    // relasi Arp
    // public function Arp()
    // {
    //     return $this->belongTo(Arp::class, 'tanggal_mulai', 'tanggal_mulai');
    // }
    public function Arp()
    {
        return $this->hasMany(Arp::class);
    }
}
