<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratBentuk extends Model
{
    use HasFactory;

    protected $table = 'surat_bentuk';

    protected $guarded = [

        'id'

    ];
}   
