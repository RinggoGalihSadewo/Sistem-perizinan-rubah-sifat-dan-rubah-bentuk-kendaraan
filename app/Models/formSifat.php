<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormSifat extends Model
{
    use HasFactory;

    protected $table = 'form_sifat';

    protected $guarded = [

        'id'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function berkasSifat()
    {
        return $this->hasOne(BerkasSifat::class);
    }

    public function trackSuratSifat()
    {
        return $this->hasOne(TrackSuratSifat::class);
    }

    public function qrSifat()
    {
        return $this->hasOne(QrSifat::class);
    }    

}
