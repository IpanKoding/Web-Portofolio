<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // Cukup tulis 'index', JANGAN tulis 'index.blade.php'
        return view('index');
    }
}