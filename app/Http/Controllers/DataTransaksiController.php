<?php

namespace App\Http\Controllers;

use App\Models\transaksi;
use Illuminate\Http\Request;
use App\Models\pengguna;
use App\Models\pengguna_dosen;
use App\Models\Buku;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class DataTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $NIM = session('NIM');
    $NIK_dosen = session('NIK_dosen');

    // Ambil data riwayat berdasarkan NIM atau NIK dari request
    $ISBN = $request->input('ISBN');
    $judul = 'Data Transaksi';

    // Query data transaksi berdasarkan NIM atau NIK
    $dataTransaksi = transaksi::where(function ($query) use ($NIM, $NIK_dosen) {
        $query->where('NIM', $NIM)->orWhere('NIK_dosen', $NIK_dosen);
    })
    ->where('ISBN', $ISBN)
    ->select('id', 'NIM', 'NIK_dosen', 'Judul', 'tanggal_pinjam', 'tanggal_kembali', 'status')
    ->get();

    // Atur variabel $nama sebelum blok kondisional
    $nama = 'Tidak Diketahui';

    if ($dataTransaksi->isNotEmpty()) {
        $dt = $dataTransaksi->first();
        if ($dt->NIM) {
            $mahasiswa = pengguna::where('NIM', $dt->NIM)->first();
            if ($mahasiswa) {
                $nama = $mahasiswa->Nama;
            } else {
                $nama = 'Nama Mahasiswa Tidak Ditemukan';
            }
        } elseif ($dt->NIK_dosen) {
            $dosen = pengguna_dosen::where('NIK_dosen', $dt->NIK_dosen)->first();
            if ($dosen) {
                $nama = $dosen->nama_dosen;
            } else {
                $nama = 'Nama Dosen Tidak Ditemukan';
            }
        }
    }
    // Kirimkan data riwayat, judul, dan $nama ke view 'staff.dataTransaksi'
    return view('staff.dataTransaksi', compact('dataTransaksi', 'judul', 'nama'));
}
    
    public function create()
    {
        $mahasiswas = pengguna::all(); // Ubah model sesuai kebutuhan
        $dosens = pengguna_dosen::all(); // Ubah model sesuai kebutuhan
        $bukus = Buku::all(); // Ubah model sesuai kebutuhan

        return view('staff.tambahTransaksi', [
            'mahasiswas' => $mahasiswas,
            'dosens' => $dosens,
            'bukus' => $bukus,
            'judul' => 'Tambah Transaksi',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        transaksi::create($request->all());

        return redirect('/staff/tambahTransaksi')->with('success', 'Data transaksi berhasil disimpan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $editTransaksi = transaksi::find($id);
        $data = [
            "editTransaksi" => $editTransaksi,
            "judul" => "Edit Transaksi"
        ];
        return view('staff.editTransaksi', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $editTransaksi = transaksi::find($id);
        $editTransaksi->update($request->all());

        return redirect('/staff/dataTransaksi')->with('success', 'Data transaksi berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hapusTransaksi = transaksi::where('id', $id)->first();
        $hapusTransaksi->delete();
        return redirect('/staff/dataTransaksi')->with('success', 'Data transaksi berhasil dihapus.');
    }

    public function search(Request $request){
        if ($request->has('search')) {
            $kataKunci = $request->search;
        
            $dataTransaksi = transaksi::where(function ($query) use ($kataKunci) {
                $query->where('Nama', 'LIKE', '%' . $kataKunci . '%')
                    ->orWhere('nama_dosen', 'LIKE', '%' . $kataKunci . '%');
            })->get();
        
            $data = [
                "dataTransaksi" => $dataTransaksi,
                "judul" => "Data Transaksi"
            ];
        } else {
            $dataTransaksi = transaksi::all();
            $data = [
                "dataTransaksi" => $dataTransaksi,
                "judul" => "Data Transaksi"
            ];
        }        

        return view('staff.dataTransaksi', $data);
    }

    public function updateStatus($id)
    {
        $transaksi = transaksi::find($id);
    
        if ($transaksi->status === 'Diproses') {
            $transaksi->status = 'Dipinjam';
            $buku = buku::where('ISBN', $transaksi->ISBN)->first();
            if($buku->Jumlah_Stok > 0){
                $buku->Jumlah_Stok -= 1;
                $buku->save();
            }
        } elseif ($transaksi->status === 'Dipinjam') {
            $transaksi->status = 'Dikembalikan';
            $buku = buku::where('ISBN', $transaksi->ISBN)->first();
            $buku->Jumlah_Stok += 1;
            $buku->save();
        } elseif ($transaksi->status === 'Dikembalikan') {
            $transaksi->status = 'Diproses';
        }
    
        $transaksi->save();
    
        return redirect()->back()->with('success', 'Status transaksi berhasil diubah.');
    }
}
