<?php

namespace App\Http\Controllers;

use App\Models\EditBerita;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editBerita = EditBerita::all();

        $title = 'Edit Berita';
        return view('news.index', [
            'editBerita' => EditBerita::all()
        ])->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Berita';
        return view('news.create')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->file('URL_gambar')->store();
        
        $validatedData = $request->validate([
            'judul_berita' => 'required|max:255',
            'konten' => 'required',
            'URL_gambar' => 'image|file|max:2048',
        ]);

        if($request->file('URL_gambar')) {
            $validatedData['URL_gambar'] = $request->file('URL_gambar')->store('news-gambar');
        }

        // $validatedData['NIK_Admin'] = auth()->Admin()->NIK_Admin;
        // $validatedData['konten'] = Str::limit($validatedData['konten'], 15);
        // $validatedData['URL_gambar'] = Str::limit($validatedData['URL_gambar'], 15);
        EditBerita::create($validatedData);

        return redirect('/berita/edit')->with('success', 'Berita Baru Berhasil Di tambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(EditBerita $editBerita)
    {
        $editBerita = $editBerita->all();

        $title = 'Berita'; 
        return view('news.News', [
            'editBerita' => $editBerita
        ])->with('title', $title);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editBerita = EditBerita::find($id);

        $title = 'Edit Berita';
        return view('news.edit',[
            'editBerita' => $editBerita,
        ])->with('title', $title);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $editBerita = EditBerita::find($id);
        // dd($editBerita);
        $rules = [
            'judul_berita' => 'required|max:255',
            'konten' => 'required',
            'URL_gambar' => 'image|file|max:2048',
        ];

        
        $validatedData = $request->validate($rules);
        
        if($request->file('URL_gambar')) {
            $validatedData['URL_gambar'] = $request->file('URL_gambar')->store('news-gambar');
        }
        
        // $validatedData['konten'] = Str::limit($validatedData['konten'], 10);
        // $validatedData['URL_gambar'] = Str::limit($validatedData['URL_gambar'], 10);

        $editBerita->update($validatedData);
    
        return redirect('/berita/edit')->with('success', 'Berita Berhasil Di edit!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($editBerita)
    {
        EditBerita::destroy($editBerita);
        
        return redirect('/berita/edit')->with('success', 'Data berhasil dihapus!');
    }
}
