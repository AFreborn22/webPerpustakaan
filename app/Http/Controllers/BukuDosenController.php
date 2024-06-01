<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;


class BukuDosenController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $bukus = Buku::where('judul', 'LIKE', '%' . $query . '%')->get();
        } else {
            $bukus = Buku::all();
        }

        $title = "Katalog Buku";

        if ($bukus->isEmpty()) {
            $pesan = "Buku tidak ditemukan";
        } else {
            $pesan = null;
        }

        return view('bukuDosen', compact('bukus', 'title', 'pesan'));
    }
}


