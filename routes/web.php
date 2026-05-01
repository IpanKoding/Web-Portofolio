<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Mengarahkan halaman utama ke PageController
Route::get('/', [PageController::class, 'index']);