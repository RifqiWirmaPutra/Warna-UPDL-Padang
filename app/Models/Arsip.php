<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Arp;

class Arsip extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal_mulai',
        'tanggal_selesai',
        'kode',
        'judul',
        'jenis_permintaan_diklat',
        'jenis_pelaksanaan_diklat',
        'angkatan',
        'instruktur',
        'rencana_peserta',
        'realisasi_peserta',
        'kelas',
        'wisma',
        'persiapan',
        'pelaksanaan',
        'pasca',
        'realisasi_biaya',
        'arp_id',
    ];
    public function arp()
    {
        return $this->belongsTo(Arp::class, 'arp_id', 'id');
    }
}
