<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\Buku;
use App\Models\CarouselBuku;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\transaksi;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $nim = session('nim');
        $buku = Buku::all();
        $title = 'Home';
        $ticketCover = session::get('cover');
        $ticketTitle = session::get('judulBuku');
        $ticketISBN = session::get('ISBN');
        // Mengambil riwayat transaksi berdasarkan NIM
        $riwayat = Transaksi::where('NIM', $nim)
            ->select('status')
            ->get();

        $lastStatus = $riwayat->last() ? $riwayat->last()->status : null;

        if (!$request->session()->has('is_logged_in') || !$request->session()->get('is_logged_in')) {
            return redirect('/login');
        }
        return view('homeuser', compact('ticketCover', 'ticketTitle', 'ticketISBN', 'title', 'riwayat', 'lastStatus'));
    }
    
    public function indexDosen(Request $request)
    {
        $nik = session('nik');
        $buku = Buku::all();
        $title = 'Home';
        
        $ticketCover = session('cover');
        $ticketTitle = session('judulBuku');
        $ticketISBN = session('ISBN');
        
        $riwayat = Transaksi::where('NIK_dosen', $nik)
            ->select('status')
            ->get();
            
        $lastStatus = $riwayat->last() ? $riwayat->last()->status : null;
        if (!$request->session()->has('is_logged_in') || !$request->session()->get('is_logged_in')) {
            return redirect('/login');
        }
        return view('homedosen', compact('ticketCover', 'ticketTitle', 'ticketISBN', 'title', 'riwayat', 'lastStatus'));
    }




    


}
