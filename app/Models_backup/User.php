<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $guarded = [
        'id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function map()
    {
        return $this->hasOne(Map::class);
    }

    public function suratBentuk()
    {
        return $this->hasMany(SuratBentuk::class);
    }

    public function suratSifat()
    {
        return $this->hasMany(SuratSifat::class);
    }

    public function trackSuratBentuk()
    {
        return $this->hasMany(TrackSuratBentuk::class);
    }

    public function trackSuratSifat()
    {
        return $this->hasMany(TrackSuratSifat::class);
    }

    public function formBentuk()
    {
        return $this->hasMany(FormBentuk::class);
    }

    public function formSifat()
    {
        return $this->hasMany(FormSifat::class);
    }

}