<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penginapan extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = ['tipePenginapan', 'harga', 'keterangan', 'fotoPenginapan'];
=======
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'penginapans';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tipeRuangan',
        'fotoRuangan',
        'harga',
        'keterangan',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
    ];
>>>>>>> df8c089bbb22f01aebda973dff238feab8c40530
}
