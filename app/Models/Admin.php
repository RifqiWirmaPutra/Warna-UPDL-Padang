<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Persiapan;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guard = 'admin';

    const ROLE_USER = 'user';
    const ROLE_SUPERADMIN = 'super-admin';
    const ROLE_AdminJar = 'jar-admin';
    const ROLE_AdminPelayanan = 'pelayanan-admin';
    const ROLE_AdminKeuangan = 'keuangan-admin';
    const ROLE_AdminPmk = 'pmk-admin';
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

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
    public function persiapans()
    {
        return $this->hasMany(Persiapan::class);
    }
    public function isAdmin()
    {
        return $this->role === self::ROLE_SUPERADMIN;
    }
    public function hasRole($role)
    {
        return $this->role === $role;
    }
}