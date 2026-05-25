<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioGallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'portfolio_id', 'tipe_konten', 'file_konten' // Pastikan ini sesuai dengan kolom di databasemu
    ];

    // INI RELASI BALIKANNYA: Gallery ini MILIK 1 Portfolio (Belongs-To)
    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class, 'portfolio_id', 'id');
    }
}