<?php

namespace App\Http\Controllers;

use App\Models\EditPanduanEprofil;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PanduanEProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editPanduanEprofil = EditPanduanEprofil::all();

        $title = 'Edit Panduan Mengedit Profil';
        return view('panduaneditprofil.index', [
            'editPanduanEprofil'=>EditPanduanEprofil::all()
        ])->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Panduan Edit Profil';
        return view('panduaneditprofil.create')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'konten' => 'required',
            'URL_gambar' => 'image|file|max:2048',
        ]);

        if($request->file('URL_gambar')) {
            $validatedData['URL_gambar'] = $request->file('URL_gambar')->store('panduanEprofil-gambar');
        }

        // $validatedData['NIK_Admin'] = auth()->Admin()->NIK_Admin;
        // $validatedData['URL_gambar'] = Str::limit($validatedData['URL_gambar'], 15);
        EditPanduanEprofil::create($validatedData);

        return redirect('/panduan/editprofil')->with('success', 'Gambar Baru Berhasil Di tambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(EditPanduanEprofil $editPanduanEprofil)
    {
        $editPanduanEprofil = $editPanduanEprofil->all();

        $title = 'Panduan Edit Profil'; 
        return view('panduaneditprofil.panduaneprofil', [
            'editPanduanEprofil' => $editPanduanEprofil
        ])->with('title', $title);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editPanduanEprofil = EditPanduanEprofil::find($id);

        $title = 'Edit Panduan Edit Profil';
        return view('panduaneditprofil.edit',[
            'editPanduanEprofil' => $editPanduanEprofil,
        ])->with('title', $title);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $editPanduanEprofil = EditPanduanEprofil::find($id);
        // dd($editBerita);
        $rules = [
            'konten' => 'required',
            'URL_gambar' => 'image|file|max:2048',
        ];

        
        $validatedData = $request->validate($rules);
        
        if($request->file('URL_gambar')) {
            $validatedData['URL_gambar'] = $request->file('URL_gambar')->store('carousel-gambar');
        }
        // $validatedData['URL_gambar'] = Str::limit($validatedData['URL_gambar'], 15);

        $editPanduanEprofil->update($validatedData);
    
        return redirect('/panduan/editprofil')->with('success', 'Gambar Berhasil Di edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($editPanduanEprofil)
    {
        EditPanduanEprofil::destroy($editPanduanEprofil);
        
        return redirect('/panduan/editprofil')->with('success', 'Data berhasil dihapus!');
    }
}
