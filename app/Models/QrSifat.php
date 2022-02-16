<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QrSifat extends Model
{
    use HasFactory;

    protected $table = "qr_sifat";

    protected $guarded = [

        'id'

    ];

    public function formSifat()
    {
        return $this->belongsTo(FormSifat::class);
    }
}
