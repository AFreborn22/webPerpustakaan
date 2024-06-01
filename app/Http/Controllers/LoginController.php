<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use App\Models\pengguna_dosen;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'Username' => 'required',
            'Password' => 'required',
            'role' => 'required',
        ]);

        $role = $request->input('role');

        $user = null;


        if ($role === 'dosen') {
            $user = pengguna_dosen::where('Username', $credentials['Username'])->first();
            if ($user && password_verify($credentials['Password'], $user->Password)) {
                Auth::login($user);

                $request->session()->regenerate();
                $request->session()->put([
                    'nik' => $user->NIK_dosen,
                    'nama' => $user->nama_dosen,
                    'Username' => $user->Username,
                    'email' => $user->email,
                    'Password'=>$user->Password,
                    'is_logged_in' => true,
                ]);
                return redirect()->intended('/dashboardDosen');
            }
        } elseif ($role === 'mahasiswa') {
            $user = pengguna::where('Username', $credentials['Username'])->first();
            if ($user && password_verify($credentials['Password'], $user->Password)) {
                Auth::login($user);

                $request->session()->regenerate();
                $request->session()->put([
                    'nim' => $user->NIM,
                    'nama' => $user->Nama,
                    'Username' => $user->Username,
                    'email' => $user->email,
                    'is_logged_in' => true,
                ]);
                return redirect()->intended('/dashboardMHS');
            }
        } elseif ($role === 'petugas') {
            $user = staff::where('Username', $credentials['Username'])->first();
            if ($user && password_verify($credentials['Password'], $user->Password)) {
                Auth::login($user);

                $request->session()->regenerate();
                $request->session()->put([
                    'Username' => $user->Username,
                    'nik' => $user->NIK_Staff,
                    'nama' => $user->Nama,
                    'is_logged_in' => true,
                   
                ]);
                return redirect()->intended('/staff/dashboardStaff');
            }
        }


        // Autentikasi gagal
        return back()->withInput()->withErrors([
            'username' => 'Username atau password salah!!',
            'role' => 'Role yang dipilih tidak tepat!!',
        ])->with('errorType', 'authentication');
    }





    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->forget('is_logged_in');
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
