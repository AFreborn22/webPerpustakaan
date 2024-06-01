<?php

namespace App\Http\Controllers;

use App\Models\majalah;
use Illuminate\Http\Request;

class DataMajalahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataMajalah = majalah::all();
        $data = [
            "dataMajalah" => $dataMajalah,
            "judul" => "Data Majalah"
        ];
        return view('staff.dataMajalah', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('staff.tambahMajalah', [
            "judul" => "Tambah Majalah"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ISSN' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'cover' => 'image|file|max:2048',
        ]);

        if($request->file('cover')) {
            $validatedData['cover'] = $request->file('cover')->store('majalah');
        }

        majalah::create($validatedData);

        return redirect('/staff/tambahMajalah')->with('success', 'Data Majalah berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(majalah $editMajalah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($ISSN)
    {
        $editMajalah = majalah::where('ISSN', $ISSN)->first();
        $data = [
            "editMajalah" => $editMajalah,
            "judul" => "Edit Majalah"
        ];
        return view('staff.editMajalah', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $ISSN)
    {
        $editMajalah = majalah::find($ISSN);
        $validatedData = $request->validate([
            'ISSN' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'tahun_terbit' => 'required',
            'cover' => 'image|file|max:2048',
        ]);

        if($request->file('cover')) {
            $validatedData['cover'] = $request->file('cover')->store('majalah');
        }
        $editMajalah->update($validatedData);
        
        return redirect('/staff/dataMajalah')->with('success', 'Data majalah berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($ISSN)
    {
        $hapusMajalah = majalah::where('ISSN', $ISSN)->first();
        $hapusMajalah->delete();
        return redirect('/staff/dataMajalah')->with('success', 'Data Majalah berhasil dihapus.');
    }

    public function search(Request $request){
        if($request->has('search')){
            $dataMajalah = majalah::where('Judul', 'LIKE', '%'.$request->search.'%')->get();
            $data = [
                "dataMajalah" => $dataMajalah,
                "judul" => "Data Majalah"
            ];
        }
        else{
            $dataMajalah = majalah::all();
            $data = [
                "dataMajalah" => $dataMajalah,
                "judul" => "Data Majalah"
            ];
        }

        return view('staff.dataMajalah', $data);
    }
}
