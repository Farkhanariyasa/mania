<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KamusMerek extends Controller
{
    public function index()
    {
        return view('pages.pengaturan.kamus-merek');
    }
}
