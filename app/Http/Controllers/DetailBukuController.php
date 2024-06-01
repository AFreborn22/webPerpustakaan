<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\transaksi;

class DetailBukuController extends Controller
{
    public function show($ISBN)
    {
        $buku = Buku::where('ISBN', $ISBN)->first();
        $title = "Detail Buku";
        session(['cover' => asset('storage/' . $buku->cover), 'judulBuku' => $buku->Judul, 'ISBN' => $buku->ISBN]); // Simpan judul buku dalam session

        $riwayat = Transaksi::where('ISBN', $ISBN)->whereIn('status', ['Diproses', 'Dipinjam'])->get();
        $lastStatus = Transaksi::where('ISBN', $ISBN)->pluck('status')->last();

        return view('detail-buku', compact('buku', 'title', 'riwayat', 'lastStatus'));
    }


    public function showDosen($ISBN)
    {
        $buku = Buku::where('ISBN', $ISBN)->first();
        $title = "Detail Buku";
        session(['cover' => asset('storage/' . $buku->cover), 'judulBuku' => $buku->Judul, 'ISBN' => $buku->ISBN]); // Simpan judul buku dalam session

        $riwayat = Transaksi::where('ISBN', $ISBN)->whereIn('status', ['Diproses', 'Dipinjam'])->get();
        $lastStatus = Transaksi::where('ISBN', $ISBN)->pluck('status')->last();

        return view('detail-buku-dosen', compact('buku', 'title', 'riwayat', 'lastStatus'));
    }
}
