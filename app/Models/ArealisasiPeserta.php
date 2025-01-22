<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Arp;

class ArealisasiPeserta extends Model
{
    use HasFactory;
    protected $fillable =[
        'nip',
        'nama',
        'tanggal_mulai',
        'tanggal_selesai',
        'kode',
        'judul',
        'angkatan',
        'verifikasi',
        'absensi',
        'tanggal_absensi',
        'arp_id'
    ];
    public function arp()
    {
        return $this->belongsTo(Arp::class, 'arp_id', 'id');
    }
}
