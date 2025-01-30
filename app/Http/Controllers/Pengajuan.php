<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pengajuan extends Controller
{
    public function index()
    {
        return view('pages.pengajuan.pengajuan-updating');
    }
}
