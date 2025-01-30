<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsetNonTI extends Controller
{
    public function index()
    {
        return view('pages.aset.aset-non-ti');
    }
}
