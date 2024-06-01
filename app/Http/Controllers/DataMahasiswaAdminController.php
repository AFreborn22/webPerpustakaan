<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use Illuminate\Http\Request;

class DataMahasiswaAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataMahasiswa = pengguna::all();
        $data = [
            "dataMahasiswa" => $dataMahasiswa,
            "title" => "Data Mahasiswa"
        ];
        return view('admin.dataMahasiswa', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambahMahasiswa', [
            "title" => "Tambah Mahasiswa"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'NIM' => 'required|digits:8',
            'Password' => 'required|min:8'
        ]);
        $passwordHash = bcrypt($validatedData['Password']);
        pengguna::create([
            'NIM' => $request->NIM,
            'Nama' => $request->Nama,
            'Username' => $request->Username,
            'Password' =>  $passwordHash,
            'email' => $request->email,
        ]);

        return redirect('/admin/tambahMahasiswa')->with('success', 'Data Mahasiswa berhasil disimpan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($NIM)
    {
        $editMahasiswa = pengguna::where('NIM', $NIM)->first();
        $data = [
            "editMahasiswa" => $editMahasiswa,
            "title" => "Edit Dosen"
        ];
        return view('admin.editMahasiswa', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $NIM)
    {
        $editMahasiswa = pengguna::where('NIM', $NIM)->first();
        $editMahasiswa->update($request->all());

        return redirect('/admin/dataMahasiswa')->with('success', 'Data Mahasiswa berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($NIM)
    {
        $hapusMahasiswa = pengguna::where('NIM', $NIM)->first();
        $hapusMahasiswa->delete();
        return redirect('/admin/dataMahasiswa')->with('success', 'Data Mahasiswa berhasil dihapus.');
    }

    public function search(Request $request){
        if($request->has('search')){
            $dataMahasiswa = pengguna::where('Nama', 'LIKE', '%'.$request->search.'%')->get();
            $data = [
                "dataMahasiswa" => $dataMahasiswa,
                "title" => "Data Mahasiswa"
            ];
        }
        else{
            $dataMahasiswa = pengguna::all();
            $data = [
                "dataMahasiswa" => $dataMahasiswa,
                "title" => "Data Mahasiswa"
            ];
        }

        return view('admin.dataMahasiswa', $data);
    }
}
