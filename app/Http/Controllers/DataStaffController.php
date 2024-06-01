<?php

namespace App\Http\Controllers;

use App\Models\staff;
use Illuminate\Http\Request;

class DataStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataStaff = staff::all();
        $data = [
            "dataStaff" => $dataStaff,
            "title" => "Data Staff"
        ];

        return view('admin.dataStaff', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambahStaff', [
            "title" => "Tambah Staff"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Password' => 'required|min:8'
        ]);
        $passwordHash = bcrypt($validatedData['Password']);
        staff::create([
            'NIK_Staff' => $request->NIK_Staff,
            'Nama' => $request->Nama,
            'Username' => $request->Username,
            'Password' =>  $passwordHash,
        ]);

        return redirect('/admin/tambahStaff')->with('success', 'Data staff berhasil disimpan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($NIK_Staff)
    {
        $editStaff = staff::where('NIK_Staff', $NIK_Staff)->first();
        $data = [
            "editStaff" => $editStaff,
            "title" => "Edit Staff"
        ];
        
        return view('admin.editStaff', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $NIK_Staff)
    {
        $editStaff = staff::where('NIK_Staff', $NIK_Staff)->first();
        $editStaff->update($request->all());

        return redirect('/admin/dataStaff')->with('success', 'Data staff berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($NIK_Staff)
    {
        $hapusStaff = staff::where('NIK_Staff', $NIK_Staff)->first();
        $hapusStaff->delete();
        return redirect('/admin/dataStaff')->with('success', 'Data staff berhasil dihapus.');
    }

    public function search(Request $request){
        if($request->has('search')){
            $dataStaff = staff::where('Nama', 'LIKE', '%'.$request->search.'%')->get();
            $data = [
                "dataStaff" => $dataStaff,
                "title" => "Data Staff"
            ];
        }
        else{
            $dataStaff = staff::all();
            $data = [
                "dataStaff" => $dataStaff,
                "title" => "Data Staff"
            ];
        }

        return view('admin.dataStaff', $data);
    }
}
