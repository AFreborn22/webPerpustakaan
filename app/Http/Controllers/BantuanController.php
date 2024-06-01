<?php

namespace App\Http\Controllers;

use App\Models\bantuan;
use Illuminate\Http\Request;

class BantuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bantuan = bantuan::all();

        $title = 'Edit Bantuan';
        return view('bantuan.index', [
            'bantuan'=>bantuan::all()
        ])->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Bantuan';
        return view('bantuan.create')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
        ]);

        bantuan::create($validatedData);

        return redirect('/bantuan/edit')->with('success', 'Bantuan Baru Berhasil Di tambah!');
    }

    /**
     * Display the specified resource.
     */
    public function show(bantuan $bantuan)
    {
        $bantuan = $bantuan->all();

        $title = 'Bantuan'; 
        return view('bantuan.Bantuan', [
            'bantuan' =>$bantuan
        ])->with('title', $title);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bantuan = bantuan::find($id);

        $title = 'Edit Bantuan';
        return view('bantuan.edit',[
            'bantuan' => $bantuan,
        ])->with('title', $title);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $bantuan = bantuan::find($id);

        $rules = [
            'judul' => 'required|max:255',
            'isi' => 'required',
        ];
      
        $validatedData = $request->validate($rules);

        $bantuan->update($validatedData);
    
        return redirect('/bantuan/edit')->with('success', 'Bantuan Berhasil Di edit!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bantuan $bantuan)
    {
        bantuan::destroy($bantuan);
        
        return redirect('/bantuan/edit')->with('success', 'Data berhasil dihapus!');
    }
}
