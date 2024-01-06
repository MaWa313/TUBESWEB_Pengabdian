<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelatihan;

class PelatihanController extends Controller
{
    public function create()
    {
        return view('createpelatihan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'namaprogram' => 'required|string',
            'diterbitkan' => 'required|string',
            'deskripsi' => 'required|string',


        ]);



        Pelatihan::create([
            'namaprogram' => $request->input('namaprogram'),
            'diterbitkan' => $request->input('diterbitkan'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        return redirect()->route('admin')->with('flash_message', 'Pelatihan added successfully');
    }
}
