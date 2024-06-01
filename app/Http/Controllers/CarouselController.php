<?php

namespace App\Http\Controllers;

use App\Models\EditCarousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editCarousel = EditCarousel::all();

        $title = 'Edit Carousel';
        return view('carousel.index', [
            'editCarousel'=>EditCarousel::all()
        ])->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Carousel';
        return view('carousel.create')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'url_gambar' => 'image|file|max:2048',
        ]);

        if($request->file('url_gambar')) {
            $validatedData['url_gambar'] = $request->file('url_gambar')->store('carousel-gambar');
        }

        // $validatedData['NIK_Admin'] = auth()->Admin()->NIK_Admin;
        // $validatedData['url_gambar'] = Str::limit($validatedData['url_gambar'], 15);
        EditCarousel::create($validatedData);

        return redirect('/carousel/edit')->with('success', 'Gambar Baru Berhasil Di tambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(EditCarousel $editCarousel)
    {
        
        $editCarousel = $editCarousel->all();
        // dd($editCarousel->url_gambar);  
        // dd($editCarousel['url_gambar']);

        $title = 'Halaman Utama'; 
        return view('carousel.Beranda', [
            'editCarousel' => $editCarousel
        ])->with('title', $title);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editCarousel = EditCarousel::find($id);

        $title = 'Edit Carousel';
        return view('carousel.edit',[
            'editCarousel' => $editCarousel,
        ])->with('title', $title);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $editCarousel = EditCarousel::find($id);
        // dd($editBerita);
        $rules = [
            'url_gambar' => 'image|file|max:2048',
        ];

        
        $validatedData = $request->validate($rules);
        
        if($request->file('url_gambar')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['url_gambar'] = $request->file('url_gambar')->store('carousel-gambar');
        }
        $validatedData['url_gambar'] = Str::limit($validatedData['url_gambar'], 15);

        $editCarousel->update($validatedData);
    
        return redirect('/carousel/edit')->with('success', 'Carousel Berhasil Di edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($editCarousel)
    {
        // if($editCarousel->url_gambar){
        //     Storage::delete($editCarousel->url_gambar);
        // }

        EditCarousel::destroy($editCarousel);
        
        return redirect('/carousel/edit')->with('success', 'Data berhasil dihapus!');
    }
}
