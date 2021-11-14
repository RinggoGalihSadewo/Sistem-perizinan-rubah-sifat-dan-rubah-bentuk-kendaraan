<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoBentuk extends Model
{
    use HasFactory;

    protected $table = 'foto_bentuk';

    protected $guarded = [

        'id'

    ];

    public function fotoBentuk()
    {
        return $this->belongsTo(FotoBentuk::class);
    }

}
