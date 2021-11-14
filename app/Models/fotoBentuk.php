<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fotoBentuk extends Model
{
    use HasFactory;

    protected $table = 'foto_bentuk';

    protected $guarded = [

        'id'

    ];

}
