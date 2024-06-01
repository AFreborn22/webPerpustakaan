<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Admin;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user sedang dalam sesi login sebagai admin
        if ($request->session()->has('NIK_Admin')) {
            // Jika NIK_Admin ada di sesi, maka cek apakah ID tersebut valid
            $admin = Admin::find($request->session()->get('NIK_Admin'));

            if ($admin) {
                // Jika ID valid, lanjutkan ke request berikutnya
                return $next($request);
            }
        }

        // Jika tidak valid, arahkan kembali ke halaman login
        return redirect('/admin/login');
    }
    
}
