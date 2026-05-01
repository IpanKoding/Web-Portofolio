<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio; // Jembatan yang wajib ada

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Bersihkan tabel dulu
        Portfolio::truncate();

        // 2. Data karyamu yang baru
        Portfolio::create([
            'judul' => 'Web Design',
            'image' => 'web-design.jpg',
            'icon'  => 'fa-solid fa-desktop',
        ]);

        Portfolio::create([
            'judul' => 'Mobile App',
            'image' => 'mobile-app.jpg',
            'icon'  => 'fa-solid fa-mobile-screen-button',
        ]);

        Portfolio::create([
            'judul' => 'Graphic Design',
            'image' => 'graphic-design.jpg',
            'icon'  => 'fa-solid fa-palette',
        ]);
    }
}