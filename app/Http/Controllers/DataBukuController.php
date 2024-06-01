<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class DataBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataBuku = Buku::all();
        $data = [
            "dataBuku" => $dataBuku,
            "judul" => "Data Buku"
        ];
        return view('staff.dataBuku', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('staff.tambahBuku', [
            "judul" => "Tambah Buku"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ISBN' => 'required',
            'Judul' => 'required',
            'Pengarang' => 'required',
            'Penerbit' => 'required',
            'Tahun_Terbit' => 'required',
            'Jumlah_Stok' => 'required',
            'deskripsi' => 'required',
            'cover' => 'image|file|max:2048',
        ]);

        if($request->file('cover')) {
            $validatedData['cover'] = $request->file('cover')->store('buku');
        }
        Buku::create($validatedData);
        
        return redirect('/staff/tambahBuku')->with('success', 'Data Buku berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $editBuku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($ISBN)
    {
        $editBuku = Buku::find($ISBN);
        $data = [
            "editBuku" => $editBuku,
            "judul" => "Edit Buku"
        ];
        return view('staff.editBuku', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $ISBN)
    {
        $editBuku = Buku::find($ISBN);
        $validatedData = $request->validate([
            'ISBN' => 'required',
            'Judul' => 'required',
            'Pengarang' => 'required',
            'Penerbit' => 'required',
            'Tahun_Terbit' => 'required',
            'Jumlah_Stok' => 'required',
            'deskripsi' => 'required',
            'cover' => 'image|file|max:2048',
        ]);

        if($request->file('cover')) {
            $validatedData['cover'] = $request->file('cover')->store('buku');
        }
        $editBuku->update($validatedData);
        
        return redirect('/staff/dataBuku')->with('success', 'Data Buku berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($ISBN)
    {
        $hapusBuku = Buku::where('ISBN', $ISBN)->first();
        $hapusBuku->delete();
        return redirect('/staff/dataBuku')->with('success', 'Data Buku berhasil dihapus.');
    }

    public function search(Request $request){
        if($request->has('search')){
            $dataBuku = Buku::where('Judul', 'LIKE', '%'.$request->search.'%')->get();
            $data = [
                "dataBuku" => $dataBuku,
                "judul" => "Data Buku"
            ];
        }
        else{
            $dataBuku = Buku::all();
            $data = [
                "dataBuku" => $dataBuku,
                "judul" => "Data Buku"
            ];
        }

        return view('staff.dataBuku', $data);
    }
}
