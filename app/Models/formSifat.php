<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formSifat extends Model
{
    use HasFactory;

    protected $table = 'form_sifat';

    protected $guarded = [

        'id'

    ];

}
