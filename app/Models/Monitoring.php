<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    use HasFactory;

    protected $fillable = [
        'penginapan_id',
        'jenis_penginapan_id',
        'booking_pe_id',
        'tanggal_masuk',
        'tanggal_keluar',
        'jumlah_hari',
        'namaKamar',
        'nomorKamar',
        'tersedia',
    ];

    // Relasi ke tabel Penginapan
    public function penginapan()
    {
        return $this->belongsTo(Penginapan::class);
    }

    // Relasi ke tabel JenisPenginapan
    // Monitoring.php
    public function jenisPenginapan()
    {
        return $this->belongsTo(JenisPenginapan::class, 'jenis_penginapan_id');
    }


    // Relasi ke tabel BookingPe
    // Relasi ke tabel BookingPe
    // public function bookingPe()
    // {
    //     return $this->belongsTo(BookingPe::class, 'booking_pe_id');
    // }
    // Model Monitoring
    public function bookingPe()
    {
        return $this->belongsTo(BookingPe::class);  // Pastikan relasi ini sesuai
    }

    public function booking()
    {
        return $this->belongsTo(BookingPe::class, 'booking_id', 'id');
    }
}
