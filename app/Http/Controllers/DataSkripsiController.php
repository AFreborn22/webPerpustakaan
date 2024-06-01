<?php

namespace App\Http\Controllers;

use App\Models\skripsi;
use Illuminate\Http\Request;

class DataSkripsiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataSkripsi = skripsi::all();
        $data = [
            "dataSkripsi" => $dataSkripsi,
            "judul" => "Data Skripsi"
        ];
        return view('staff.dataSkripsi', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('staff.tambahSkripsi', [
            "judul" => "Tambah Skripsi"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'tahun_publikasi' => 'required',
            'cover' => 'image|file|max:2048',
        ]);

        if($request->file('cover')) {
            $validatedData['cover'] = $request->file('cover')->store('skripsi');
        }

        skripsi::create($validatedData);

        return redirect('/staff/tambahSkripsi')->with('success', 'Data Skripsi berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(skripsi $editSkripsi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $editSkripsi = skripsi::find($id);
        $data = [
            "editSkripsi" => $editSkripsi,
            "judul" => "Edit Skripsi"
        ];
        return view('staff.editSkripsi', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $editSkripsi = skripsi::find($id);
        $validatedData = $request->validate([
            'id' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'tahun_publikasi' => 'required',
            'cover' => 'image|file|max:2048',
        ]);

        if($request->file('cover')) {
            $validatedData['cover'] = $request->file('cover')->store('skripsi');
        }
        $editSkripsi->update($validatedData);
        
        return redirect('/staff/dataSkripsi')->with('success', 'Data skripsi berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hapusSkripsi = skripsi::where('id', $id)->first();
        $hapusSkripsi->delete();
        return redirect('/staff/dataSkripsi')->with('success', 'Data Skripsi berhasil dihapus.');
    }

    public function search(Request $request){
        if($request->has('search')){
            $dataSkripsi = skripsi::where('Judul', 'LIKE', '%'.$request->search.'%')->get();
            $data = [
                "dataSkripsi" => $dataSkripsi,
                "judul" => "Data Skripsi"
            ];
        }
        else{
            $dataSkripsi = skripsi::all();
            $data = [
                "dataSkripsi" => $dataSkripsi,
                "judul" => "Data Skripsi"
            ];
        }

        return view('staff.dataSkripsi', $data);
    }
}
