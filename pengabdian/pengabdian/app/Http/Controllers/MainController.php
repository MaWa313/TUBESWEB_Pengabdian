<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class MainController extends Controller
{
    public function index()
    {
        $newsItems = Berita::all();
        return view('main', ['newsItems' => $newsItems]);
    }
}
