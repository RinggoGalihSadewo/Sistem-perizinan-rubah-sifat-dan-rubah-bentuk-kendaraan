<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoSifat extends Model
{
    use HasFactory;

    protected $table = 'foto_sifat';

    protected $guarded = [

        'id'

    ];

    public function fotoSifat()
    {
        return $this->belongsTo(FotoSifat::class);
    }


}
