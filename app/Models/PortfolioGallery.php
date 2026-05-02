<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioGallery extends Model
{
    use HasFactory;

    // Buka gembok untuk 3 kolom ini
    protected $fillable = ['portfolio_id', 'tipe_konten', 'file_konten'];

    // INI KODINGAN RELASI BARU: Gallery ini MILIK 1 Portfolio (Induk)
    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
}