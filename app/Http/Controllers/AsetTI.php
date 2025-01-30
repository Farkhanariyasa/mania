<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsetTI extends Controller
{
    public function index()
    {
        return view('pages.aset.aset-ti');
    }
}
