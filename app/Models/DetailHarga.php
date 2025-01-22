<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailHarga extends Model
{
    use HasFactory;

    // Tentukan kolom-kolom yang bisa diisi
    protected $fillable = ['hargaMonthly', 'hargaDaily', 'nonDaily', 'nonMonthly'];
}
