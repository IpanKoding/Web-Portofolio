<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// 1. Ini jalur untuk halaman utama web kamu
Route::get('/', [PageController::class, 'index']);

// 2. Ini jalur pintas untuk suntik data kita
Route::get('/suntik-data', function () {
    // Bersihkan tabel biar datanya nggak numpuk/dobel kalau halamannya ke-refresh
    \App\Models\Portfolio::truncate();

    // ===================================
    // MASUKKAN DATA LAMA
    // ===================================
    \App\Models\Portfolio::create([
        'judul' => 'Web Design',
        'image' => 'web-design.jpg',
        'icon'  => 'fa-solid fa-desktop'
    ]);

    \App\Models\Portfolio::create([
        'judul' => 'Mobile App',
        'image' => 'mobile-app.jpg',
        'icon'  => 'fa-solid fa-mobile-screen-button'
    ]);

    \App\Models\Portfolio::create([
        'judul' => 'Graphic Design',
        'image' => 'graphic-design.jpg',
        'icon'  => 'fa-solid fa-palette'
    ]);
    \App\Models\Portfolio::create([
        'judul' => 'Fotografi',
        'image' => 'fotografi.jpg',
        'icon'  => 'fa-solid fa-camera'
    ]);

    \App\Models\Portfolio::create([
        'judul' => 'UI/UX Design',
        'image' => 'ui-ux.jpg',
        'icon'  => 'fa-brands fa-figma'
    ]);

    \App\Models\Portfolio::create([
        'judul' => 'Videography',
        'image' => 'videography.jpg',
        'icon'  => 'fa-solid fa-video'
    ]);

    return "<h2>SUKSES MAZEH! 6 Data karyamu berhasil disuntik ke database. Silakan buka halaman utama web kamu.</h2>";
});