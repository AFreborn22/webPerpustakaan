<?php

namespace App\Http\Controllers;

use App\Models\EditTataMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PanduanMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editTataMasuk = EditTataMasuk::all();

        $title = 'Edit Panduan Masuk Perpustakaan';
        return view('panduanmasuk.index', [
            'editTataMasuk'=>EditTataMasuk::all()
        ])->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Panduan Masuk';
        return view('panduanmasuk.create')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'URL_gambar' => 'image|file|max:2048',
        ]);

        if($request->file('URL_gambar')) {
            $validatedData['URL_gambar'] = $request->file('URL_gambar')->store('panduanmasuk-gambar');
        }

        // $validatedData['NIK_Admin'] = auth()->Admin()->NIK_Admin;
        // $validatedData['URL_gambar'] = Str::limit($validatedData['URL_gambar'], 15);
        EditTataMasuk::create($validatedData);

        return redirect('/panduan/masuk')->with('success', 'Gambar Baru Berhasil Di tambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(EditTataMasuk $editTataMasuk)
    {
        $editTataMasuk = $editTataMasuk->all();
        // dd($editCarousel->url_gambar);  
        // dd($editCarousel['url_gambar']);

        $title = 'Panduan Masuk'; 
        return view('panduanmasuk.PanduanMasuk', [
            'editTatamasuk' => $editTataMasuk
        ])->with('title', $title);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editTataMasuk = EditTataMasuk::find($id);

        $title = 'Edit Panduan Masuk Perpustakaan';
        return view('panduanmasuk.edit',[
            'editTataMasuk' => $editTataMasuk,
        ])->with('title', $title);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $editTataMasuk = EditTataMasuk::find($id);
        // dd($editBerita);
        $rules = [
            'URL_gambar' => 'image|file|max:2048',
        ];

        
        $validatedData = $request->validate($rules);
        
        if($request->file('URL_gambar')) {
            $validatedData['URL_gambar'] = $request->file('URL_gambar')->store('panduanmasuk-gambar');
        }
        // $validatedData['URL_gambar'] = Str::limit($validatedData['URL_gambar'], 15);

        $editTataMasuk->update($validatedData);
    
        return redirect('/panduan/masuk')->with('success', 'Panduan Masuk Berhasil Di edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($editTataMasuk)
    {
        EditTataMasuk::destroy($editTataMasuk);
        
        return redirect('/panduan/masuk')->with('success', 'Data berhasil dihapus!');
    }
}
