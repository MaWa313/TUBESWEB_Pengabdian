<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use Illuminate\Http\Request;


class PelayananViewsController extends Controller
{
    public function index()
    {
        $newsItems = Pelayanan::all();
        return view('pelayanan', ['newsItems' => $newsItems]);
    }
}
