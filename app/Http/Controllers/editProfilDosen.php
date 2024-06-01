<?php

namespace App\Http\Controllers;
use App\Models\pengguna;
use App\Models\pengguna_dosen;
use Illuminate\Http\Request;

class editProfilDosen extends Controller
{
    public function index()
    {
        $title = 'Profil';

        return view('dosen.indexDosen')->with('title', $title);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required',
            'Nama' => 'required',
        ]);

        $user = null;

         // Mencari pengguna berdasarkan email pada tabel 'pengguna'
         $user = pengguna::where('email', $validatedData['email'])->first();


    // Jika pengguna tidak ditemukan pada tabel 'pengguna',
    // mencari pengguna berdasarkan email pada tabel 'pengguna_dosen'
    if (!$user) {
        $user = pengguna_dosen::where('email', $validatedData['email'])->first();
    }

        if ($user) {
            $user->nama_dosen = $validatedData['Nama'];
            $user->save();

            return redirect('/editprofil/dosen')->with('success', 'Password updated successfully.');
        } else {
            return redirect()->back()->withErrors([
                'email' => 'Email salah',
            ])->withInput();
        }
    }
}
