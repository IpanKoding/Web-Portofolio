<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul', 'image', 'icon', 'tipe_konten', 'file_konten', 'deskripsi'
    ];

    // INI KODINGAN RELASI BARU: 1 Portfolio Punya BANYAK Gallery (One-to-Many)
    public function galleries()
    {
        // Parameter: (Nama Model Target, Foreign Key di tabel target, Local Key di tabel ini)
        return $this->hasMany(PortfolioGallery::class, 'portfolio_id', 'id');
    }
}