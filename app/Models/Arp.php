<?php

namespace App\Models;

use App\Models\ArpRencanaPe;
use App\Models\User;
use App\Models\Persiapan;
use App\Models\Pelaksanaan;
use App\Models\Kelas;
use App\Models\Wisma;
use App\Models\UdaftarHadir;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arp extends Model
{
    use HasFactory;
    protected $table = 'arp';

    protected $fillable = [
        'tanggal_mulai',
        'tanggal_selesai',
        'kode',
        'judul',
        'jenis_permintaan_diklat',
        'jenis_pelaksanaan_diklat',
        'angkatan',
        'instruktur',
        'rencana_peserta',
        'realisasi_peserta',
        'kelas',
        'wisma',
        'persiapan',
        'pelaksanaan',
        'pasca',
        'realisasi_biaya',
        'aksi',
    ];
    // protected $dates = ['tanggal_mulai', 'tanggal_selesai'];


     // Relasi One-to-Many ke model User
     public function users()
     {
         return $this->hasMany(User::class, 'arp_id', 'id');
     }
     public function Persiapans()
     {
        return $this->hasMany(Persiapan::class);
    }

    public function persentasePersiapan()
    {
        // Menghitung total kegiatan tanpa memperhitungkan yang memiliki status "Tidak Diperlukan"
        $totalKegiatan = $this->Persiapans->where('ceklist', '<>', 'Tidak Diperlukan')->count();

        // Menghitung total checklist yang memiliki status "Selesai"
        $totalCeklist = $this->Persiapans->where('ceklist', 'Selesai')->count();
        if ($totalKegiatan == 0) {
            return 0;
        }
        // Menghitung persentase dengan memperhitungkan checklist yang memiliki status "Tidak Diperlukan"
        return round(($totalCeklist / $totalKegiatan) * 100);
    }

    public function Pelaksanaans()
     {
        return $this->hasMany(Pelaksanaan::class);
    }

    public function persentasePelaksanaan()
    {
        $totalKegiatan = $this->Pelaksanaans->where('ceklist', '<>', 'Tidak Diperlukan')->count();
        $totalCeklist = $this->Pelaksanaans->where('ceklist', 'Selesai')->count();
        if ($totalKegiatan == 0) {
            return 0;
        }
        return round(($totalCeklist / $totalKegiatan) * 100);
    }

    public function Pascas()
     {
        return $this->hasMany(Pasca::class);
    }

    public function persentasePasca()
    {
        $totalKegiatan = $this->Pascas->where('ceklist', '<>', 'Tidak Diperlukan')->count();
        $totalCeklist = $this->Pascas->where('ceklist', 'Selesai')->count();
        if ($totalKegiatan == 0) {
            return 0;
        }
        return round(($totalCeklist / $totalKegiatan) * 100);
    }
    
    public function RealisasiBiayas()
     {
        return $this->hasMany(RealisasiBiaya::class);
    }

    
    public function totalRealisasiBiaya()
    {
        return $this->RealisasiBiayas->sum('ceklist');
    }
    
    public function hitungAbsensiCount()
    {
        return $this->users->filter(function ($user) {
            return isset($user->absensiPeserta->absensi) && $user->absensiPeserta->absensi == 'hadir' && $user->absensiPeserta->arp_id == $this->id;
        })->count();
    }
    // 'hadir' && $user->absensiPeserta->arp_id == $this->id;


    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas');
    }

    public function wisma()
    {
        return $this->belongsTo(Wisma::class, 'wisma');
    }
    
    public function udaftarHadir()
    {
        return $this->hasMany(UdaftarHadir::class, 'arp_id', 'id');
    }

}
