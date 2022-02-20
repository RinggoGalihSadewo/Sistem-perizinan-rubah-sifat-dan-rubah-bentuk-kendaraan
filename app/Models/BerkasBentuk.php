<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BerkasBentuk extends Model
{
    use HasFactory;

    protected $table = 'berkas_bentuk';

    protected $guarded = [

        'id'

    ];

    public function formBentuk()
    {
        return $this->belongsTo(FormBentuk::class);
    }

}
