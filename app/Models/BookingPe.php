<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingPe extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggalMasuk',
        'tanggalKeluar',
        'email',
        'email_verified_at',
        'noHP',
        'uploadKTP',
    ];

    protected $casts = [
        'tanggalMasuk' => 'date',
        'tanggalKeluar' => 'date',
        'email_verified_at' => 'datetime',
    ];
}
