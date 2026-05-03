<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController; // <--- INI TAMBAHAN BARU UNTUK ADMIN

// 1. Ini jalur untuk halaman utama web kamu
Route::get('/', [PageController::class, 'index']);

// 2. Ini jalur pintas untuk suntik data kita
Route::get('/suntik-data', function () {
    // Bersihkan data lama
    \App\Models\Portfolio::truncate();

    // 1. 3D RENDER (MENGGANTIKAN WEB DESIGN)
    \App\Models\Portfolio::create([
        'judul' => '3D Render',
        'image' => '3d-render.jpg',
        'icon'  => 'fa-solid fa-cubes', // Icon kubus 3D
        'tipe_konten' => '3d',
        'file_konten' => 'https://modelviewer.dev/shared-assets/models/Astronaut.glb', // Link 3D dummy
        'deskripsi' => 'Hasil render 3D interaktif. Silakan putar dan zoom objek ini untuk melihat detailnya secara langsung dari browser!'
    ]);

    // 2. 2D ANIMATION (MENGGANTIKAN MOBILE APP)
    \App\Models\Portfolio::create([
        'judul' => '2D Animation',
        'image' => '2d-animation.jpg',
        'icon'  => 'fa-solid fa-film', // Icon roll film
        'tipe_konten' => 'video',
        'file_konten' => 'https://www.w3schools.com/html/mov_bbb.mp4', // Link Video dummy
        'deskripsi' => 'Karya animasi 2D yang berjalan otomatis. Menampilkan storytelling visual dengan pergerakan karakter yang dinamis.'
    ]);

    // 3. Graphic Design (GAMBAR)
    \App\Models\Portfolio::create([
        'judul' => 'Graphic Design',
        'image' => 'graphic-design.jpg', 
        'icon'  => 'fa-solid fa-palette',
        'tipe_konten' => 'gambar',
        'file_konten' => 'graphic-design.jpg', 
        'deskripsi' => 'Eksplorasi desain grafis dengan perpaduan warna yang berani dan komposisi tata letak yang out-of-the-box.'
    ]);

    // 4. Fotografi (GAMBAR)
    \App\Models\Portfolio::create([
        'judul' => 'Fotografi',
        'image' => 'fotografi.jpg',
        'icon'  => 'fa-solid fa-camera',
        'tipe_konten' => 'gambar',
        'file_konten' => 'fotografi.jpg',
        'deskripsi' => 'Kumpulan tangkapan lensa dengan fokus pada komposisi dan pencahayaan natural.'
    ]);

    // 5. UI/UX Design (GAMBAR)
    \App\Models\Portfolio::create([
        'judul' => 'UI/UX Design',
        'image' => 'ui-ux.jpg',
        'icon'  => 'fa-brands fa-figma',
        'tipe_konten' => 'gambar',
        'file_konten' => 'ui-ux.jpg',
        'deskripsi' => 'Riset dan perancangan pengalaman pengguna (UX) yang mulus untuk berbagai platform.'
    ]);

    // 6. Videography (VIDEO AUTOPLAY)
    \App\Models\Portfolio::create([
        'judul' => 'Videography',
        'image' => 'videography.jpg', 
        'icon'  => 'fa-solid fa-video',
        'tipe_konten' => 'video',
        'file_konten' => 'https://www.w3schools.com/html/mov_bbb.mp4', 
        'deskripsi' => 'Karya videografi cinematic. Video ini diatur untuk langsung berjalan secara otomatis (Autoplay) tanpa harus menekan tombol Play!'
    ]);

    return "<h2>SUKSES MAZEH! Data baru (3D Render & 2D Animation) berhasil disuntik ke database!</h2>";
});

// ==========================================
// 3. JALUR UNTUK FITUR ADMIN PANEL (BARU!)
// ==========================================

// Halaman Utama Admin (Daftar Portofolio & Form Tambah)
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

// Proses Simpan Portofolio Baru (Upload Gambar ke Database)
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');

// Proses Hapus Portofolio
Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.delete');

// Proses Edit Data
Route::get('/admin/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/{id}', [AdminController::class, 'update'])->name('admin.update');

// JALUR UNTUK KELOLA ALBUM / GALLERY
Route::get('/admin/portfolio/{id}/gallery', [AdminController::class, 'gallery'])->name('admin.gallery');
Route::post('/admin/portfolio/{id}/gallery', [AdminController::class, 'storeGallery'])->name('admin.gallery.store');
Route::delete('/admin/gallery/{id}', [AdminController::class, 'destroyGallery'])->name('admin.gallery.delete');