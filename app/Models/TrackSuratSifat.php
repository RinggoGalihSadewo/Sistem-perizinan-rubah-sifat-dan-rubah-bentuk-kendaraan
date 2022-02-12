<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackSuratSifat extends Model
{
    use HasFactory;

    protected $table = 'track_surat_sifat';

    protected $guarded = [

        'id'

    ];

    public function formSifat()
    {
        return $this->belongsTo(FormSifat::class);
    }    

}
