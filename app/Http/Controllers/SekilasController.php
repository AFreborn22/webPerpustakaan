<?php

namespace App\Http\Controllers;

use App\Models\sekilas;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SekilasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sekilas = sekilas::all();

        $title = 'Edit Sekilas';
        return view('sekilas.index', [
            'sekilas' => sekilas::all()
        ])->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Sekilas';
        return view('sekilas.create')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kontensatu' => 'required',
            'kontendua' => 'required',
            'URL_gambar' => 'image|file|max:2048',
        ]);

        if($request->file('URL_gambar')) {
            $validatedData['URL_gambar'] = $request->file('URL_gambar')->store('sekilas-gambar');
        }

        // $validatedData['NIK_Admin'] = auth()->Admin()->NIK_Admin;
        // $validatedData['kontensatu'] = Str::limit($validatedData['kontensatu'], 15);
        // $validatedData['kontendua'] = Str::limit($validatedData['kontendua'], 15);
        sekilas::create($validatedData);

        return redirect('/sekilas/edit')->with('success', 'Sekilas Baru Berhasil Di tambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(sekilas $sekilas)
    {
        $sekilas = $sekilas->all();

        $title = 'Sekilas'; 
        return view('sekilas.sekilas', [
            'sekilas' => $sekilas
        ])->with('title', $title);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sekilas= sekilas::find($id);

        $title = 'Edit Sekilas';
        return view('sekilas.edit',[
            'sekilas' => $sekilas,
        ])->with('title', $title);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sekilas = sekilas::find($id);
        // dd($editPanduanPeminjaman);
        $rules = [
            'kontensatu' => 'required',
            'kontendua' => 'required',
            'URL_gambar' => 'image|file|max:2048',
        ];

        
        $validatedData = $request->validate($rules);
        
        if($request->file('URL_gambar')) {
            $validatedData['URL_gambar'] = $request->file('URL_gambar')->store('sekilas-gambar');
        }

        // $validatedData['kontensatu'] = Str::limit($validatedData['kontensatu'], 15);
        // $validatedData['kontendua'] = Str::limit($validatedData['kontendua'], 15);

        $sekilas->update($validatedData);
    
        return redirect('/sekilas/edit')->with('success', 'Sekilas Berhasil Di edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($sekilas)
    {
        sekilas::destroy($sekilas);
        
        return redirect('/sekilas/edit')->with('success', 'Data berhasil dihapus!');
    }
}
