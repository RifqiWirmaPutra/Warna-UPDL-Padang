<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisma extends Model
{
    use HasFactory;
    protected $table = 'wisma';
    protected $fillable = ['no_wisma', 'nama_wisma'];
}
