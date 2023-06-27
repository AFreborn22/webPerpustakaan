<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('Backup');
// });

use App\Http\Controllers\BackupController;
use App\Http\Controllers\General;
use App\Http\Controllers\GeneralController;

Route::get('/', function () {
    return view('Beranda', [
        "tittle" => "Halaman Utama"
    ]);
});

Route::get('/Sekilas', function () {
    return view('Sekilas',[
        "tittle" => "Sekilas"
    ]);
});

Route::get('/Fitur', function () {
    return view('Fitur', [
        "tittle" => "Fitur Online"
    ]);
});

Route::get('/Fasilitas', function () {
    return view('Fasilitas',[
        "tittle" => "Fasilitas Offline"
    ]);
});

Route::get('/News', function () {
    return view('News', [
        "tittle" => "Berita Kami"
    ]);
});

Route::get('/InfoPMB', function () {
    return view('InfoPMB', [
        "tittle" => "Informasi Penerimaan Mahasiswa Baru"
    ]);
});

Route::get('/Bantuan', function () {
    return view('Bantuan', [
        "tittle" => "Bantuan"
    ]);
});

Route::get('/Kontak', function () {
    return view('Kontak', [
        "tittle" => "Kontak"
    ]);
});

Route::get('/Maps', function () {
    return view('Maps', [
        "tittle" => "Lokasi Perpustakaan Amikom"
    ]);
});

Route::get('/PanduanMasuk', function () {
    return view('PanduanMasuk', [
        "tittle" => "Panduan Masuk Perpustakaan Amikom"
    ]);
});


Route::get('/Backup', [Backup::class, 'index'])->name('Backup.index');
Route::get('/General', [General::class, 'general'])->name('General.general');
// routes/web.php

Route::get('/Backup', [BackupController::class, 'backup'])->name('backup.backup');

Route::get('/Backup', function () {
    return view('Backup');
});




