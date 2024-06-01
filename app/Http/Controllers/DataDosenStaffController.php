<?php

namespace App\Http\Controllers;

use App\Models\pengguna_dosen;
use Illuminate\Http\Request;

class DataDosenStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataDosen = pengguna_dosen::all();
        $data = [
            "dataDosen" => $dataDosen,
            "judul" => "Data Dosen"
        ];
        return view('staff.dataDosen', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('staff.tambahDosen', [
            "judul" => "Tambah Dosen"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'NIK_dosen' => 'required|digits:13',
            'Password' => 'required|min:8'
        ]);
        $passwordHash = bcrypt($validatedData['Password']);
        pengguna_dosen::create([
            'NIK_dosen' => $request->NIK_dosen,
            'nama_dosen' => $request->nama_dosen,
            'Username' => $request->Username,
            'Password' =>  $passwordHash,
            'email' => $request->email,
        ]);

        return redirect('/staff/tambahDosen')->with('success', 'Data Dosen berhasil disimpan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($NIK_dosen)
    {
        $editDosen = pengguna_dosen::where('NIK_dosen', $NIK_dosen)->first();
        $data = [
            "editDosen" => $editDosen,
            "judul" => "Edit Dosen"
        ];
        return view('staff.editDosen', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $NIK_dosen)
    {
        $editDosen = pengguna_dosen::where('NIK_dosen', $NIK_dosen)->first();
        $editDosen->update($request->all());

        return redirect('/staff/dataDosen')->with('success', 'Data Dosen berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($NIK_dosen)
    {
        $hapusDosen = pengguna_dosen::where('NIK_dosen', $NIK_dosen)->first();
        $hapusDosen->delete();
        return redirect('/staff/dataDosen')->with('success', 'Data Dosen berhasil dihapus.');
    }

    public function search(Request $request){
        if($request->has('search')){
            $dataDosen = pengguna_dosen::where('nama_dosen', 'LIKE', '%'.$request->search.'%')->get();
            $data = [
                "dataDosen" => $dataDosen,
                "judul" => "Data Dosen"
            ];
        }
        else{
            $dataDosen = pengguna_dosen::all();
            $data = [
                "dataDosen" => $dataDosen,
                "judul" => "Data Dosen"
            ];
        }

        return view('staff.dataDosen', $data);
    }
}
