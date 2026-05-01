<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio; // Panggil modelnya

class PageController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel portfolios
        $portfolios = Portfolio::all(); 

        // Kirim datanya ke halaman depan (misal nama filenya welcome.blade.php)
        return view('index', compact('portfolios')); 
    }
}