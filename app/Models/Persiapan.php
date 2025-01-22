<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Arp;
use App\Models\Admin;

class Persiapan extends Model
{
    use HasFactory;
    protected $fillable = ['kegiatan', 'pic', 'ceklist', 'keterangan', 'arp_id'];

    public function arp()
    {
        return $this->belongsTo(Arp::class);
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }


}
