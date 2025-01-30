<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Panduan extends Controller
{
    public function index()
    {
        return view('pages.lainnya.panduan');
    }
}
