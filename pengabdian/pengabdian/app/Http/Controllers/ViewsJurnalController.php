<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurnal;

class ViewsJurnalController extends Controller
{
    public function index()
    {
        $newsItems = Jurnal::all();
        return view('viewsjurnal', ['newsItems' => $newsItems]);
    }
}
