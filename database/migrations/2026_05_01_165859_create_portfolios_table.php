<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('image'); // Thumbnail depan
            $table->string('icon');
            
            // --- 3 KOLOM BARU SAKTI ---
            $table->string('tipe_konten')->default('gambar'); // Pilihan: 'gambar', 'video', '3d'
            $table->text('file_konten')->nullable(); // Isi: nama file MP4, GLB, dll
            $table->text('deskripsi')->nullable(); // Penjelasan karya
            // --------------------------
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};