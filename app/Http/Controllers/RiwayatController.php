<?php

namespace App\Http\Controllers;

use App\Models\Riwayat;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class RiwayatController extends Controller
{

    public function index(Request $request)
    {
        $nim = session('nim');

        if ($nim) {
            $riwayat = Transaksi::where('NIM', $nim)
                ->select('ISBN', 'Judul', 'tanggal_pinjam', 'tanggal_kembali', 'status')
                ->orderByDesc('id')
                ->get();
        } else {
            $riwayat = collect();
        }

        $title = 'Riwayat';

        return view('riwayatuser', compact('riwayat', 'title'));
    }


    public function indexDosen(Request $request)
    {
        $nik = session('nik'); // Mengambil NIM user yang sedang aktif dari session
        if ($nik) {
            $riwayat = Transaksi::where('NIK_dosen', $nik)
                ->select('ISBN', 'Judul', 'tanggal_pinjam', 'tanggal_kembali', 'status')
                ->orderByDesc('id')
                ->get();
        } else {
            $riwayat = collect();
        }

        $title = 'Riwayat';
        // Kirimkan data riwayat ke view 'riwayatuser'
        return view('riwayatdosen', compact('riwayat', 'title'));
    }
}
