<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tracSuratBentuk extends Model
{
    use HasFactory;

    protected $table = 'track_surat_bentuk';

    protected $guarded = [

        'id'

    ];

}
