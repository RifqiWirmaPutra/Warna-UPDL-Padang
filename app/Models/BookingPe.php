<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingPe extends Model
{
    use HasFactory;

    protected $table = 'pe_bookings';

    protected $fillable = [
        'tanggalMasuk',
        'tanggalKeluar',
        'email',
        'noHP',
        'uploadKTP',
        'nip',
    ];
}
