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

    // INI KODINGAN RELASI BARU: 1 Portfolio Punya BANYAK Gallery (Anak)
    public function galleries()
    {
        return $this->hasMany(PortfolioGallery::class);
    }
}