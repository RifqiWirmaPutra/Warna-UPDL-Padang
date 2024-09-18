<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    use HasFactory;

    protected $table = 'ruangans';

    protected $fillable = [
        'tipeLab',
        'jumlahPeserta',
        'harga',
        'foto',
        'keterangan',
        'tanggalMasuk',
        'tanggalKeluar',
        'email',
        'email_verified_at',
        'noHP',
        'uploadKTP',
    ];

    protected $dates = ['tanggalMasuk', 'tanggalKeluar', 'email_verified_at'];
}
