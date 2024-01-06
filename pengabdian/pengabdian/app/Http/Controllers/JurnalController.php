<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurnal;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;


class JurnalController extends Controller
{
    public function create()
    {
        return view('createjurnal');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul_jurnal' => 'required|string',
            'namapenulis' => 'required|string',
            'tanggalpublikasi' => 'required|string',
            'file_name' => 'required|file|mimes:pdf,doc,docx', // Add allowed file types
        ]);
        $file = $request->file('file_name');
        if ($file->isValid()) {
            // Get the original file name
            $originalName = $file->getClientOriginalName();

            // Store the file with its original name in the 'jurnal_files' folder within the 'public' disk
            $filePath = $file->storeAs('jurnal_files', $originalName, 'public');

            // Create a record in the database
            Jurnal::create([
                'judul_jurnal' => $request->input('judul_jurnal'),
                'namapenulis' => $request->input('namapenulis'),
                'tanggalpublikasi' => $request->input('tanggalpublikasi'),
                'bahasa' => $request->input('bahasa'),
                'file_name' => $filePath,
            ]);

            return redirect()->route('admin')->with('flash_message', 'Berita added successfully');
        }

        // Return an error message if the file is not valid
        return redirect()->back()->with('error', 'Invalid file. Please choose a valid file.');
    }
    public function download($id)
    {
        $jurnal = Jurnal::find($id);

        if (!$jurnal) {
            abort(404);
        }

        $filePath = storage_path("app/public/{$jurnal->file_name}");

        return Response::download($filePath);
    }

    public function destroy($id)
    {
        $jurnal = Jurnal::find($id);

        if (!$jurnal) {
            abort(404);
        }

        // Hapus file terkait dari penyimpanan
        Storage::disk('public')->delete($jurnal->file_name);

        // Hapus record dari database
        $jurnal->delete();

        return redirect()->route('admin')->with('flash_message', 'Jurnal berhasil dihapus');
    }
}
