<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use Illuminate\Http\Request;


class PelatihanViewsController extends Controller
{
    public function index()
    {
        $newsItems = Pelatihan::all();
        return view('pelatihan', ['newsItems' => $newsItems]);
    }
}
