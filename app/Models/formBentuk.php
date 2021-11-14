<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormBentuk extends Model
{
    use HasFactory;

    protected $table = 'form_bentuk';

    protected $guarded = [

        'id'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fotoBentuk()
    {
        return $this->hasOne(FotoBentuk::class);
    }

}
