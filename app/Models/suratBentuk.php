<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratBentuk extends Model
{
    use HasFactory;

    protected $table = 'surat_bentuk';

    protected $guarded = [

        'id'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}   
