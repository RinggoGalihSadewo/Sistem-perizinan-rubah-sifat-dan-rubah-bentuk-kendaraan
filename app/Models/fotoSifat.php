<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fotoSifat extends Model
{
    use HasFactory;

    protected $table = 'foto_sifat';

    protected $guarded = [

        'id'

    ];

}
