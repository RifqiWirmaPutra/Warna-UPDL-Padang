<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisPenginapan extends Model
{
    protected $fillable = ['nama', 'nomorKamar'];
    public function bookings()
    {
        return $this->hasMany(BookingPe::class, 'jenis_penginapan_id');
    }
}