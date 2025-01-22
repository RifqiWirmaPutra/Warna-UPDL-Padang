<?php

namespace App\Models;
use App\Models\Arp;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UdaftarHadir extends Model
{
    use HasFactory;
    protected $fillable = [
        'nip',
        'nama',
        'konfirmasi',
        'user_id',
        'arp_id',
    ];

    // Menambahkan relasi ke model User (Arp)
    
    public function users()
    {
        return $this->hasMany(User::class, 'user_id', 'id');
    }
    public function arps()
    {
        return $this->hasMany(Arp::class, 'arp_id', 'id');
    }
}
