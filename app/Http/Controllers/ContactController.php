<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Menampilkan Halaman Tentang
    public function contact()
    {
        return view('contact');
    }
}