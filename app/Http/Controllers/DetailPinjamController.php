<?php

namespace App\Http\Controllers;
use App\Models\transaksi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Buku; // Pastikan Anda telah mengimpor model Buku sesuai dengan namespace yang benar

class DetailPinjamController extends Controller
{
    public function show($ISBN)
    {
        $nim = session('nim');
        $buku = Buku::where('ISBN', $ISBN)->first();

        // Mengambil riwayat transaksi berdasarkan NIM
        $riwayat = Transaksi::where('NIM', $nim)
            ->select('status')
            ->get();

        $title = "Detail Pinjam";

        return view('detail-pinjam', compact('buku', 'title', 'riwayat'));
    }
    
    public function showDosen($ISBN)
    {
        $nik = session('nik');
        $buku = Buku::where('ISBN', $ISBN)->first();

        $riwayat = Transaksi::where('NIK_dosen', $nik)
            ->select('status')
            ->get();

        $title = "Detail Pinjam";
        // Pass data ke view
        return view('detail-pinjam-dosen', compact('buku', 'title', 'riwayat'));
    }
}
