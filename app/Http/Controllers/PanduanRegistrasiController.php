<?php

namespace App\Http\Controllers;

use App\Models\EditPanduanRegistrasi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PanduanRegistrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editPanduanRegistrasi = EditPanduanRegistrasi::all();

        $title = 'Edit Panduan Registrasi';
        return view('registrasi.index', [
            'editPanduanRegistrasi' => EditPanduanRegistrasi::all()
        ])->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Panduan Registrasi';
        return view('registrasi.create')->with('title', $title);
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
            $validatedData['URL_gambar'] = $request->file('URL_gambar')->store('panduanregistrasi-gambar');
        }

        // $validatedData['NIK_Admin'] = auth()->Admin()->NIK_Admin;
        // $validatedData['konten'] = Str::limit($validatedData['konten'], 15);
        // $validatedData['URL_gambar'] = Str::limit($validatedData['URL_gambar'], 15);
        EditPanduanRegistrasi::create($validatedData);

        return redirect('/panduan/registrasi')->with('success', 'Panduan Peminjaman Baru Berhasil Di tambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(EditPanduanRegistrasi $editPanduanRegistrasi)
    {
        $editPanduanRegistrasi = $editPanduanRegistrasi->all();

        $title = 'Panduan Edit Registrasi'; 
        return view('registrasi.registrasi', [
            'editPanduanRegistrasi' => $editPanduanRegistrasi
        ])->with('title', $title);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editPanduanRegistrasi= EditPanduanRegistrasi::find($id);

        $title = 'Edit Panduan Resgitrasi';
        return view('registrasi.edit',[
            'editPanduanRegistrasi' => $editPanduanRegistrasi,
        ])->with('title', $title);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $editPanduanRegistrasi = EditPanduanRegistrasi::find($id);
        // dd($editPanduanPeminjaman);
        $rules = [
            'konten' => 'required|max:255',
            'URL_gambar' => 'image|file|max:2048',
        ];

        
        $validatedData = $request->validate($rules);
        
        if($request->file('URL_gambar')) {
            $validatedData['URL_gambar'] = $request->file('URL_gambar')->store('panduanregistrasi-gambar');
        }

        // $validatedData['konten'] = Str::limit($validatedData['konten'], 15);
        // $validatedData['URL_gambar'] = Str::limit($validatedData['URL_gambar'], 15);

        $editPanduanRegistrasi->update($validatedData);
    
        return redirect('/panduan/registrasi')->with('success', 'Panduan Registrasi Berhasil Di edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($editPanduanRegistrasi)
    {
        EditPanduanRegistrasi::destroy($editPanduanRegistrasi);
        
        return redirect('/panduan/registrasi')->with('success', 'Data berhasil dihapus!');
    }
}
