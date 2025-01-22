<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penginapan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipePenginapan',
        'fotoPenginapan' => 'array',
        'hargadpln',
        'hargampln',
        'hargadnonpln',
        'hargamnonpln',
        'fasilitas',
    ];

    public function images()
{
    return $this->hasMany(PenginapanImage::class);
}

    public function monitorings()
    {
        return $this->hasMany(Monitoring::class);
    }

    public function bookings(){
        return $this->hasMany(BookingPe::class);
    }
}
