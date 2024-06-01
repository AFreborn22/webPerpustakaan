<?php

namespace App\Http\Controllers;

use App\Models\staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class editProfilStaff extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Profil';
    
        $staff = Auth::user();

        return view('staff.indexStaff', [
            'staff' => $staff,
            'title' => $title,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($NIK_staff)
    {
        $title = 'Edit Profil';
        $user = Auth::user();


        // Mengambil data staff dari database berdasarkan NIK_staff yang diterima sebagai parameter
        $staff = Staff::where('NIK_Staff', $NIK_staff)->first();

        // Jika data staff tidak ditemukan, beri respons error atau redirect ke halaman lain
        if (!$staff) {
            return redirect()->route('staff.indexStaff')->with('error', 'Data staff tidak ditemukan.');
        }

        return view('staff.edit', [
            $user = Auth::user(),
            'staff' => $staff,
        ])->with('title', $title);
    }


    /**
     * Update the user's profile data in storage.
     */
    public function update(Request $request, $NIK_staff)
    {
        // Validasi data yang diterima dari form edit
        $validatedData = $request->validate([
            'email' => 'required',
            'password_lama' => 'required',
            'password_baru' => 'required|min:7',
            'username' => 'required',
        ]);

        // Mengambil data staff dari database berdasarkan NIK_staff yang diterima sebagai parameter
        $staff = Staff::where('NIK_Staff', $NIK_staff)->first();

        // Jika data staff tidak ditemukan, beri respons error atau redirect ke halaman lain
        if (!$staff) {
            return redirect()->route('staff.indexStaff')->with('error', 'Data staff tidak ditemukan.');
        }

        // Validasi password lama dengan password yang ada di session
        if (!password_verify($validatedData['password_lama'], $staff->Password)) {
            return redirect()->route('staff.edit', $NIK_staff)->with('error', 'Password lama salah.');
        }

        // Update data staff dengan nilai yang baru
        $staff->Username = $validatedData['username'];
        $staff->Email = $validatedData['email'];
        $staff->Password = Hash::make($validatedData['password_baru']);
        $staff->save();

        // Simpan data baru ke dalam sesi
        session([
            'Username' => $validatedData['username'],
        ]);

        // Redirect kembali ke halaman profil setelah berhasil update
        return redirect()->route('/staff/indexStaff')->with('success', 'Profil berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(staff $staff)
    {
        //
    }
}
