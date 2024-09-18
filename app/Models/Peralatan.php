<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peralatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaAlat',
        'jumlahTersedia',
        'harga',
        'tanggalPinjam',
        'tanggalKembali',
        'booking'
    ];
}
