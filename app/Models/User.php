<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Arp;
use App\Models\UdaftarHadir;
use App\Models\UabsensiPeserta;
use App\Models\ArealisasiPeserta;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'nip',
        'jabatan',
        'unit_induk',
        'unit_pelaksana',
        'no_hp',
        'arp_id',

    ];
    // Relasi Many-to-One ke model Arp
    public function arp()
    {
        return $this->belongsTo(Arp::class, 'arp_id', 'id');
        // return $this->belongsTo(Arp::class, 'arp_id', 'id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function absensi()
    {
        return $this->hasMany(UdaftarHadir::class); //nama model Absensi.
    }
    public function hasTakenAbsensi()
    {
        return UdaftarHadir::where('arp_id', $this->arp_id)->where('user_id', $this->id)->exists(); // `absensi` adalah relasi ke data absensi pengguna.
    }
    public function udaftarHadir()
    {
        return $this->hasOne(UdaftarHadir::class, 'user_id', 'id');
    }

    public function absensiPeserta(){
        return $this->hasOne(UabsensiPeserta::class, 'user_id', 'id');
    }

    public static function create(array $attributes = [])
    {
        $user = static::query()->create($attributes);

        // Check if ARP ID is not set and NIP or email already exists
        if (!$user->arp_id && (static::where('nip', $attributes['nip'])->exists() || static::where('email', $attributes['email'])->exists())) {
            // Find the existing user with the same NIP or email and set ARP ID
            $existingUser = static::where('nip', $attributes['nip'])->orWhere('email', $attributes['email'])->first();
            $user->arp_id = $existingUser->arp_id;
            $user->save();
        }

        return $user;
    }

}
