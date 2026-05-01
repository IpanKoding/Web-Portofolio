<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    // Ini dia "Surat Izin"-nya agar data bisa masuk
    protected $fillable = [
        'judul', 
        'image', 
        'icon'
    ];
}