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
        'tipeKamar',
        'pilihanKamar',
        'harga',
        'email',
        'email_verified_at',
        'noHP',
        'nik',
        'nip',
        'status'
    ];

    protected $casts = [
        'tanggalMasuk' => 'date',
        'tanggalKeluar' => 'date',
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relasi antara BookingPe dan Penginapan
     */
    public function penginapan()
    {
        return $this->belongsTo(Penginapan::class, 'tipeKamar', 'id' , 'tipePenginapan');
    }
}
