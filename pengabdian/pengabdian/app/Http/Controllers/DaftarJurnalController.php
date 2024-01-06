<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurnal;


class DaftarJurnalController extends Controller
{
    public function index()
    {
        // return view('daftarjurnal');
        $newsItems = Jurnal::all();
        return view('daftarjurnal', ['newsItems' => $newsItems]);
    }
}
