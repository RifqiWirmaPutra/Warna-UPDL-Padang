<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adh extends Model
{
    use HasFactory;
    protected $table = 'adhs';

    protected $fillable = [
        'tanggal_mulai',
        'tanggal_selesai',
        'kode',
        'judul',
        'nama',
        'nip',
        'tanggal_absen',
    ];
}
