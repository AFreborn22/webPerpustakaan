<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use App\Models\pengguna;
use App\Models\pengguna_dosen;
use App\Models\buku;
use App\Models\majalah;
use App\Models\jurnal;
use App\Models\skripsi;
use Illuminate\Http\Request;

class DataLaporanController extends Controller
{
    public function showInventory()
{
    $buku = buku::all();
    $majalah = majalah::all();
    $jurnal = jurnal::all();
    $skripsi = skripsi::all();
    $judul = 'Laporan Inventory';
    return view('staff.dataLaporanInventory', compact('buku', 'majalah', 'jurnal', 'skripsi', 'judul'));
}

public function showAnggota()
{
    $pengguna = pengguna::all();
    $pengguna_dosen = pengguna_dosen::all();
    $judul = 'Laporan Anggota';
    return view('staff.dataLaporanAnggota', compact('pengguna', 'pengguna_dosen', 'judul'));
}

public function searchInventory(Request $request)
{
    $search = $request->input('search');
    
    // Melakukan pencarian pada model Buku
    $buku = Buku::where('Judul', 'LIKE', "%$search%")->get();

    // Melakukan pencarian pada model Majalah
    $majalah = Majalah::where('judul', 'LIKE', "%$search%")->get();

    // Melakukan pencarian pada model Jurnal
    $jurnal = Jurnal::where('judul', 'LIKE', "%$search%")->get();

    // Melakukan pencarian pada model Skripsi
    $skripsi = Skripsi::where('judul', 'LIKE', "%$search%")->get();

    $judul = 'Laporan Inventory';

    return view('staff.dataLaporanInventory', compact('buku', 'majalah', 'jurnal', 'skripsi', 'judul'));
}

public function searchAnggota(Request $request)
{
    $search = $request->input('search');
    
    // Melakukan pencarian pada model Buku
    $pengguna = pengguna::where('Nama', 'LIKE', "%$search%")->get();

    // Melakukan pencarian pada model Majalah
    $pengguna_dosen = pengguna_dosen::where('nama_dosen', 'LIKE', "%$search%")->get();

    $judul = 'Laporan Anggota';

    return view('staff.dataLaporanAnggota', compact('pengguna', 'pengguna_dosen', 'judul'));
}

}