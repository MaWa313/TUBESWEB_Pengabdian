<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelayanan;

class PelayananController extends Controller
{
    public function create()
    {
        return view('createpelayanan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'namaprogram' => 'required|string',
            'diterbitkan' => 'required|string',
            'deskripsi' => 'required|string',


        ]);



        Pelayanan::create([
            'namaprogram' => $request->input('namaprogram'),
            'diterbitkan' => $request->input('diterbitkan'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        return redirect()->route('admin')->with('flash_message', 'Pelatihan added successfully');
    }
}
