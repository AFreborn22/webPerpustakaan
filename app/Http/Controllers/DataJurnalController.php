<?php

namespace App\Http\Controllers;

use App\Models\jurnal;
use Illuminate\Http\Request;

class DataJurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataJurnal = jurnal::all();
        $data = [
            "dataJurnal" => $dataJurnal,
            "judul" => "Data Jurnal"
        ];
        return view('staff.dataJurnal', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('staff.tambahJurnal', [
            "judul" => "Tambah Jurnal"
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
            'tahun_terbit' => 'required',
            'cover' => 'image|file|max:2048',
        ]);

        if($request->file('cover')) {
            $validatedData['cover'] = $request->file('cover')->store('jurnal');
        }

        jurnal::create($validatedData);
        
        return redirect('/staff/tambahJurnal')->with('success', 'Data Jurnal berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(jurnal $editJurnal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($ISSN)
    {
        $editJurnal = jurnal::where('ISSN', $ISSN)->first();
        $data = [
            "editJurnal" => $editJurnal,
            "judul" => "Edit Jurnal"
        ];
        return view('staff.editJurnal', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $ISSN)
    {
        $editJurnal = jurnal::find($ISSN);
        $validatedData = $request->validate([
            'ISSN' => 'required',
            'judul' => 'required',
            'penulis' => 'required',
            'tahun_terbit' => 'required',
            'cover' => 'image|file|max:2048',
        ]);

        if($request->file('cover')) {
            $validatedData['cover'] = $request->file('cover')->store('jurnal');
        }
        $editJurnal->update($validatedData);
        
        return redirect('/staff/dataJurnal')->with('success', 'Data Jurnal berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($ISSN)
    {
        $hapusJurnal = jurnal::where('ISSN', $ISSN)->first();
        $hapusJurnal->delete();
        return redirect('/staff/dataJurnal')->with('success', 'Data Jurnal berhasil dihapus.');
    }

    public function search(Request $request){
        if($request->has('search')){
            $dataJurnal = jurnal::where('Judul', 'LIKE', '%'.$request->search.'%')->get();
            $data = [
                "dataJurnal" => $dataJurnal,
                "judul" => "Data Jurnal"
            ];
        }
        else{
            $dataJurnal = jurnal::all();
            $data = [
                "dataJurnal" => $dataJurnal,
                "judul" => "Data Jurnal"
            ];
        }

        return view('staff.dataJurnal', $data);
    }
}
