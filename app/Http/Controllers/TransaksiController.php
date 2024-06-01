<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\User;
use App\Models\Transaksi;
use App\Models\Riwayat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
// ...

class TransaksiController extends Controller
{
    public function saveDatesToSession(Request $request)
    {
        $borrowDate = $request->input('borrow_date');
        $returnDate = $request->input('return_date');

        // Store the dates in the session
        Session::put('borrow_date', $borrowDate);
        Session::put('return_date', $returnDate);
        

        return response()->json(['message' => 'Dates saved to session']);
    }

    public function store(Request $request)
    {
        // Simpan data ke dalam tabel transaksi
        Transaksi::create([
            'NIM' => $request->input('nim'),
            'Nama' => $request->input('nama'),
            'ISBN' => $request->input('isbn'),
            'Judul' => $request->input('judulBuku'),
            'tanggal_pinjam' => $request->input('borrow-date'),
            'tanggal_kembali' => $request->input('return-date'),
            'created_at' => now(),
        ]);
        $request->session()->put('hasBorrowedBook', true);
        
        // Mengurangi stok buku


        return redirect('/dashboardMHS')->with('success', 'Transaksi berhasil');
    }



    public function storeDosen(Request $request)
    {
        // Simpan data ke dalam tabel transaksi
        Transaksi::create([
            'NIK_Dosen' => $request->input('nik'),
            'nama_dosen' => $request->input('nama'),
            'ISBN' => $request->input('isbn'),
            'Judul' => $request->input('judulBuku'),
            'tanggal_pinjam' => $request->input('borrow-date'),
            'tanggal_kembali' => $request->input('return-date'),
            'created_at' => now(),
        ]);


        return redirect('/dashboardDosen')->with('success', 'Transaksi berhasil');
        // Redirect atau tampilkan response sesuai kebutuhan Anda
    }
}
