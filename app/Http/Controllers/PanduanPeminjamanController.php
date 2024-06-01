<?php

namespace App\Http\Controllers;

use App\Models\EditPanduanPeminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PanduanPeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editPanduanPeminjaman = EditPanduanPeminjaman::all();

        $title = 'Edit Panduan Peminjaman';
        return view('panduanpeminjaman.index', [
            'editPanduanPeminjaman' => EditPanduanPeminjaman::all()
        ])->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Panduan Peminjaman';
        return view('panduanpeminjaman.create')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'konten' => 'required|max:255',
            'URL_gambar' => 'image|file|max:2048',
        ]);

        if($request->file('URL_gambar')) {
            $validatedData['URL_gambar'] = $request->file('URL_gambar')->store('panduanpinjam-gambar');
        }

        // $validatedData['NIK_Admin'] = auth()->Admin()->NIK_Admin;
        // $validatedData['konten'] = Str::limit($validatedData['konten'], 15);
        // $validatedData['URL_gambar'] = Str::limit($validatedData['URL_gambar'], 15);
        EditPanduanPeminjaman::create($validatedData);

        return redirect('/panduan/peminjaman')->with('success', 'Panduan Peminjaman Baru Berhasil Di tambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(EditPanduanPeminjaman $editPanduanPeminjaman)
    {
        $editPanduanPeminjaman = $editPanduanPeminjaman->all();

        $title = 'Panduan Edit Peminjaman'; 
        return view('panduanpeminjaman.panduanpeminjaman', [
            'editPanduanPeminjaman' => $editPanduanPeminjaman
        ])->with('title', $title);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editPanduanPeminjaman= EditPanduanPeminjaman::find($id);

        $title = 'Edit Panduan Peminjaman';
        return view('panduanpeminjaman.edit',[
            'editPanduanPeminjaman' => $editPanduanPeminjaman,
        ])->with('title', $title);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $editPanduanPeminjaman = EditPanduanPeminjaman::find($id);
        // dd($editPanduanPeminjaman);
        $rules = [
            'konten' => 'required|max:255',
            'URL_gambar' => 'image|file|max:2048',
        ];

        
        $validatedData = $request->validate($rules);
        
        if($request->file('URL_gambar')) {
            $validatedData['URL_gambar'] = $request->file('URL_gambar')->store('panduanpinjam-gambar');
        }

        // $validatedData['konten'] = Str::limit($validatedData['konten'], 15);
        // $validatedData['URL_gambar'] = Str::limit($validatedData['URL_gambar'], 15);

        $editPanduanPeminjaman->update($validatedData);
    
        return redirect('/panduan/peminjaman')->with('success', 'Panduan Peminjaman Berhasil Di edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($editPanduanPeminjaman)
    {
        EditPanduanPeminjaman::destroy($editPanduanPeminjaman);
        
        return redirect('/panduan/peminjaman')->with('success', 'Data berhasil dihapus!');
    }
}
