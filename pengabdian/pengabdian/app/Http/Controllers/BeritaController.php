<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function create()
    {
        return view('createberita');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'isi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $gambarPath = $request->file('gambar')->storeAs('berita_images', $request->file('gambar')->getClientOriginalName(), 'public');


        Berita::create([
            'judul' => $request->input('judul'),
            'isi' => $request->input('isi'),
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('admin')->with('flash_message', 'Berita added successfully');
    }
}
