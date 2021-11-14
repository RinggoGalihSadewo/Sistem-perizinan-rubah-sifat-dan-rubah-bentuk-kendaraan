<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratSifat extends Model
{
    use HasFactory;

    protected $table = 'surat_sifat';

    protected $guarded = [

        'id'

    ];
}
