<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdmin extends Controller
{
    public function showLoginForm()
    {
        return view('loginAdmin'); // Ganti 'admin.login' dengan view form login admin Anda
    }

    public function loginAdmin(Request $request)
    {
        $credentials = $request->validate([
            'Username' => 'required',
            'Password' => 'required',
        ]);

        $user = Admin::where('Username', $credentials['Username'])->first();
        if ($user && password_verify($credentials['Password'], $user->Password)) {
            Auth::login($user);

            $request->session()->regenerate();
            $request->session()->put([
                'Username' => $user->Username,
                'nik' => $user->NIK_Admin,
                'nama' => $user->Nama,
                'is_logged_in' => true,
            ]);
            return redirect()->intended('/admin/dashboardAdmin');
        }
        else{
            return back()->withInput()->withErrors([
                'username' => 'Username atau password salah!!',
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->forget('is_logged_in');
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login'); 
    }
}
