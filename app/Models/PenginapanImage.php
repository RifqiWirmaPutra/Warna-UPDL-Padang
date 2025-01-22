<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenginapanImage extends Model
{
    use HasFactory;

    protected $fillable = ['penginapan_id', 'file_path'];

    public function penginapan()
    {
        return $this->belongsTo(Penginapan::class);
    }
}

