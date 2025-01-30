<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelolaRuangan extends Controller
{
    public function index()
    {
        return view('pages.pengaturan.kelola-ruangan');
    }
}
