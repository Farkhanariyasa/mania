<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aset;

class AsetTI extends Controller
{
    public function index()
    {

        $asetTI = Aset::where('kategori', 'aset-ti')->get();

        // pagination
        $asetTI = Aset::where('kategori', 'aset-ti')->paginate(15);


        return view('pages.aset.aset-ti', compact('asetTI'));
    }
}
