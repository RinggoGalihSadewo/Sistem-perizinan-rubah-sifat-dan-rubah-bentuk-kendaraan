<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QrBentuk extends Model
{
    use HasFactory;

    protected $table = "qr_bentuk";

    protected $guarded = [

        'id'

    ];

    public function formSifat()
    {
        return $this->belongsTo(FormSifat::class);
    }
}
