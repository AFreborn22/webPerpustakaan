<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
// Import the Buku model at the top of the controller file

class PinjamBukuController extends Controller
{

    // ...

    public function index(Request $request)
    {
        $judulBuku = $request->session()->get('judulBuku');
        $buku = Buku::where('Judul', $judulBuku)->first();
        $bukus = Buku::all(); // Retrieve all bukus from the database
        $title = "Pinjam Buku";
        $bukuJuduls = Buku::pluck('judul')->toJson(); // Convert to JSON format
        View::share('bukuJuduls', $bukuJuduls);

        return view('pinjam-buku', compact('judulBuku', 'buku', 'bukus', 'title'));
    }

    public function indexDosen(Request $request)
    {
        $judulBuku = $request->session()->get('judulBuku');
        $buku = Buku::where('Judul', $judulBuku)->first();
        $bukus = Buku::all(); // Retrieve all bukus from the database
        $title = "Pinjam Buku";
        $bukuJuduls = Buku::pluck('judul')->toJson(); // Convert to JSON format
        View::share('bukuJuduls', $bukuJuduls);

        return view('pinjam-buku-dosen', compact('judulBuku', 'buku', 'bukus', 'title'));
    }
}
