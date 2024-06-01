<?php

namespace App\Http\Controllers;

use App\Models\CarouselBuku;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CarouselBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carouselBuku = CarouselBuku::all();

        $title = 'Edit Carousel';
        return view('carouselbuku.index', [
            'carouselBuku'=>CarouselBuku::all()
        ])->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Carousel';
        return view('carouselbuku.create')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'gambar' => 'image|file|max:2048',
        ]);

        if($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('carouselbuku-gambar');
        }

        // $validatedData['NIK_Admin'] = auth()->Admin()->NIK_Admin;
        // $validatedData['gambar'] = Str::limit($validatedData['gambar'], 15);
        CarouselBuku::create($validatedData);

        return redirect('/carousel/buku')->with('success', 'Gambar Baru Berhasil Di tambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(CarouselBuku $carouselBuku)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $carouselBuku = CarouselBuku::find($id);

        $title = 'Edit Carousel';
        return view('carouselbuku.edit',[
            'carouselBuku' => $carouselBuku,
        ])->with('title', $title);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $carouselBuku = CarouselBuku::find($id);

        $rules = [
            'gambar' => 'image|file|max:2048',
        ];

        
        $validatedData = $request->validate($rules);
        
        if($request->file('gambar')) {
            
            $validatedData['gambar'] = $request->file('gambar')->store('carouselbuku-gambar');
        }
        // $validatedData['gambar'] = Str::limit($validatedData['gambar'], 15);

        $carouselBuku->update($validatedData);
    
        return redirect('/carousel/buku')->with('success', 'Carousel Berhasil Di edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarouselBuku $carouselBuku)
    {
        CarouselBuku::destroy($carouselBuku);
        
        return redirect('/carousel/buku')->with('success', 'Data berhasil dihapus!');
    }
}
