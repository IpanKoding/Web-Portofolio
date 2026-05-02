<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portfolio_galleries', function (Blueprint $table) {
            $table->id();
            // Ini kolom penyambung (Kunci) ke tabel Induk (Portfolio)
            $table->foreignId('portfolio_id')->constrained()->onDelete('cascade'); 
            
            // Kolom isi album
            $table->string('tipe_konten')->default('gambar'); // Pilihan: 'gambar', 'video', '3d'
            $table->text('file_konten'); // Isi: Nama file gambar / Link Video / Link 3D
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolio_galleries');
    }
};