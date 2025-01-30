<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelolaPengguna extends Controller
{
    public function index()
    {
        return view('pages.pengaturan.kelola-pengguna');
    }
}
