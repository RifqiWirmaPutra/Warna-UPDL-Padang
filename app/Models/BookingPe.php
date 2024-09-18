<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingPe extends Model
{
    use HasFactory;

<<<<<<< HEAD
=======
    protected $table = 'pe_bookings';

>>>>>>> df8c089bbb22f01aebda973dff238feab8c40530
    protected $fillable = [
        'tanggalMasuk',
        'tanggalKeluar',
        'email',
<<<<<<< HEAD
        'email_verified_at',
        'noHP',
        'uploadKTP',
    ];

    protected $casts = [
        'tanggalMasuk' => 'date',
        'tanggalKeluar' => 'date',
        'email_verified_at' => 'datetime',
=======
        'noHP',
        'uploadKTP',
        'nip',
>>>>>>> df8c089bbb22f01aebda973dff238feab8c40530
    ];
}
