<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArsipUser extends Model
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
        'konfirmasi',
        'arp_id',
    ];
}
