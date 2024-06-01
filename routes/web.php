<?php

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

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginAdmin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditProfilMhs;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\editProfilStaff;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\SekilasController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\DataBukuController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\LupaPassController;
use App\Http\Controllers\BukuDosenController;
use App\Http\Controllers\DataStaffController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DataJurnalController;
use App\Http\Controllers\DetailBukuController;
use App\Http\Controllers\PinjamBukuController;
use App\Http\Controllers\DataLaporanController;
use App\Http\Controllers\DataMajalahController;
use App\Http\Controllers\DataRiwayatController;
use App\Http\Controllers\DataSkripsiController;
use App\Http\Controllers\CarouselBukuController;
use App\Http\Controllers\DetailPinjamController;
use App\Http\Controllers\PanduanMasukController;
use App\Http\Controllers\DataTransaksiController;
use App\Http\Controllers\DataDosenAdminController;
use App\Http\Controllers\DataDosenStaffController;
use App\Http\Controllers\PanduanEProfilController;
use App\Http\Controllers\PanduanPeminjamanController;
use App\Http\Controllers\PanduanRegistrasiController;
use App\Http\Controllers\DataMahasiswaAdminController;
use App\Http\Controllers\DataMahasiswaStaffController;
use App\Http\Controllers\editProfilDosen;

// routes/web.php


Route::post('change-language', 'App\Http\Controllers\LanguageController@changeLanguage')->name('change.language');
Route::get('/', [CarouselController::class, 'show'])->name('carousel.Beranda');
Route::get('/Sekilas', [SekilasController::class, 'show'])->name('sekilas.sekilas');
Route::get('/News', [BeritaController::class, 'show'])->name('news.News');
Route::get('/PanduanMasuk', [PanduanMasukController::class, 'show'])->name('panduanmasuk.PanduanMasuk');
Route::get('/dashboardMHS', [HomeController::class, 'show'])->name('homeuser');
Route::get('/Bantuan', [BantuanController::class, 'show'])->name('bantuan.Bantuan');
Route::get('/CaraRegistrasi', [PanduanRegistrasiController::class, 'show'])->name('registrasi.registrasi');
Route::get('/CaraEditProfil', [PanduanEProfilController::class, 'show'])->name('panduaneprofil.panduaneprofil');
Route::get('/CaraPinjam', [PanduanPeminjamanController::class, 'show'])->name('panduanpeminjaman.panduanpeminjaman');

Route::get('/editProfil/admin', function () {
    return view('admin.edit', [
        "title" => "Edit Profil"
    ]);
});



Route::get('/Fitur', function () {
    return view('Fitur', [
        "title" => "Fitur Online"
    ]);
});

Route::get('/Fasilitas', function () {
    return view('Fasilitas', [
        "title" => "Fasilitas Offline"
    ]);
});

Route::get('/InfoPMB', function () {
    return view('InfoPMB', [
        "title" => "Informasi Penerimaan Mahasiswa Baru"
    ]);
});

Route::get('/caraPenggunaan', function () {
    return view('carapenggunaan', [
        "title" => "Cara Penggunaan"
    ]);
});

Route::get('/Kontak', function () {
    return view('Kontak', [
        "title" => "Kontak"
    ]);
});

Route::get('/Maps', function () {
    return view('Maps', [
        "title" => "Lokasi Perpustakaan Amikom"
    ]);
});

// Route::get('/dashboardAdmin', function () {
//     return view('dashboardAdmin', [
//         "title" => "Dashboard Admin"
//     ]);
// });

// Route::group(['prefix' => 'backup', 'as' => 'backup.'], function () {
//     Route::get('/', 'BackupController@index')->name('index');
//     Route::post('/', 'BackupController@backup')->name('backup');
// });


Route::get('/editprofil/dosen', [editProfilDosen::class, 'index'])->name('dosen.indexDosen');
Route::post('/editprofil/dosen', [editProfilDosen::class, 'update'])->name('dosen.updateDosen');
Route::get('/editprofil/dosen/nama', function () {
    return view('dosen.edit',[
        "title" => "Edit Nama Dosen"
    ]);
});
Route::get('/admin/carapenggunaan', function () {
    return view('cara', [
        "title" => "Edit Cara Penggunaan"
    ]);
});

Route::get('/carousel/menu', function () {
    return view('carouseledit', [
        "title" => "Edit Carousel"
    ]);
});
// Route::get('dashboardAdmin/Carousel', function () {
//     return view('carousel.index', [
//         "title" => "Edit Carousel"
//     ]);
// });

Route::resource('/carousel/edit', CarouselController::class);
Route::resource('/berita/edit', BeritaController::class);
Route::resource('/panduan/peminjaman', PanduanPeminjamanController::class);
Route::resource('/panduan/editprofil', PanduanEProfilController::class);
Route::resource('/panduan/masuk', PanduanMasukController::class);
Route::resource('/panduan/registrasi', PanduanRegistrasiController::class);
Route::resource('/carousel/buku', CarouselBukuController::class);
Route::resource('/bantuan/edit', BantuanController::class);
Route::resource('/sekilas/edit', SekilasController::class);
Route::resource('/staff/editprofil', editProfilStaff::class);

// routes/web.php
Route::get('/admin/login', [LoginAdmin::class, 'showLoginForm'])->name('loginAdmin');
Route::post('/admin/login', [LoginAdmin::class, 'loginAdmin']);
Route::post('/admin/logout', [LoginAdmin::class, 'logout'])->name('admin.logout');

//BAYU PUNYA
//Data Staff
Route::get('/admin/dashboardAdmin', function (Request $request) {
    if (!$request->session()->has('is_logged_in') || !$request->session()->get('is_logged_in')) {
        return redirect('/admin/login');
    }
    return view('admin.dashboardAdmin', [
        "title" => "Dashboard Admin"
    ]);
});
Route::get('/admin/dataStaff', [DataStaffController::class, 'index']);
Route::get('/admin/tambahStaff', [DataStaffController::class, 'create']);
Route::post('/admin/store', [DataStaffController::class, 'store']);
Route::get('/admin/{NIK_Staff}/editStaff', [DataStaffController::class, 'edit']);
Route::put('/admin/{NIK_Staff}/update', [DataStaffController::class, 'update']);
Route::delete('/admin/{NIK_Staff}/destroy', [DataStaffController::class, 'destroy']);
Route::get('/admin/dataStaff', [DataStaffController::class, 'search']);

//Data Mahasiswa Di Admin
Route::get('/admin/dataMahasiswa', [DataMahasiswaAdminController::class, 'index']);
Route::get('/admin/tambahMahasiswa', [DataMahasiswaAdminController::class, 'create']);
Route::post('/admin/storeMahasiswa', [DataMahasiswaAdminController::class, 'store']);
Route::get('/admin/{NIK_Mahasiswa}/editMahasiswa', [DataMahasiswaAdminController::class, 'edit']);
Route::put('/admin/{NIK_Mahasiswa}/updateMahasiswa', [DataMahasiswaAdminController::class, 'update']);
Route::delete('/admin/{NIK_Mahasiswa}/destroyMahasiswa', [DataMahasiswaAdminController::class, 'destroy']);
Route::get('/admin/dataMahasiswa', [DataMahasiswaAdminController::class, 'search']);

//Data Dosen Di Admin
Route::get('/admin/dataDosen', [DataDosenAdminController::class, 'index']);
Route::get('/admin/tambahDosen', [DataDosenAdminController::class, 'create']);
Route::post('/admin/storeDosen', [DataDosenAdminController::class, 'store']);
Route::get('/admin/{NIK_Dosen}/editDosen', [DataDosenAdminController::class, 'edit']);
Route::put('/admin/{NIK_Dosen}/updateDosen', [DataDosenAdminController::class, 'update']);
Route::delete('/admin/{NIK_Dosen}/destroyDosen', [DataDosenAdminController::class, 'destroy']);
Route::get('/admin/dataDosen', [DataDosenAdminController::class, 'search']);

//Dashboard Staff
Route::get('/staff/dashboardStaff', function (Request $request) {
    if (!$request->session()->has('is_logged_in') || !$request->session()->get('is_logged_in')) {
        return redirect('/login');
    }
    return view('staff.dashboardStaff', [
        "judul" => "Dashboard Staff"
    ]);
});

//Data Buku
Route::get('/staff/dataBuku', [DataBukuController::class, 'index']);
Route::get('/staff/tambahBuku', [DataBukuController::class, 'create']);
Route::post('/staff/storeBuku', [DataBukuController::class, 'store']);
Route::get('/staff/{id}/editBuku', [DataBukuController::class, 'edit']);
Route::put('/staff/{id}/updateBuku', [DataBukuController::class, 'update']);
Route::delete('/staff/{id}/destroyBuku', [DataBukuController::class, 'destroy']);
Route::get('/staff/dataBuku', [DataBukuController::class, 'search']);

//Data Majalah
Route::get('/staff/dataMajalah', [DataMajalahController::class, 'index']);
Route::get('/staff/tambahMajalah', [DataMajalahController::class, 'create']);
Route::post('/staff/storeMajalah', [DataMajalahController::class, 'store']);
Route::get('/staff/{id}/editMajalah', [DataMajalahController::class, 'edit']);
Route::put('/staff/{id}/updateMajalah', [DataMajalahController::class, 'update']);
Route::delete('/staff/{id}/destroyMajalah', [DataMajalahController::class, 'destroy']);
Route::get('/staff/dataMajalah', [DataMajalahController::class, 'search']);

//Data Jurnal
Route::get('/staff/dataJurnal', [DataJurnalController::class, 'index']);
Route::get('/staff/tambahJurnal', [DataJurnalController::class, 'create']);
Route::post('/staff/storeJurnal', [DataJurnalController::class, 'store']);
Route::get('/staff/{id}/editJurnal', [DataJurnalController::class, 'edit']);
Route::put('/staff/{id}/updateJurnal', [DataJurnalController::class, 'update']);
Route::delete('/staff/{id}/destroyJurnal', [DataJurnalController::class, 'destroy']);
Route::get('/staff/dataJurnal', [DataJurnalController::class, 'search']);

//Data Skripsi
Route::get('/staff/dataSkripsi', [DataSkripsiController::class, 'index']);
Route::get('/staff/tambahSkripsi', [DataSkripsiController::class, 'create']);
Route::post('/staff/storeSkripsi', [DataSkripsiController::class, 'store']);
Route::get('/staff/{id}/editSkripsi', [DataSkripsiController::class, 'edit']);
Route::put('/staff/{id}/updateSkripsi', [DataSkripsiController::class, 'update']);
Route::delete('/staff/{id}/destroySkripsi', [DataSkripsiController::class, 'destroy']);
Route::get('/staff/dataSkripsi', [DataSkripsiController::class, 'search']);


//Data Mahasiswa Di Staff
Route::get('/staff/dataMahasiswa', [DataMahasiswaStaffController::class, 'index']);
Route::get('/staff/tambahMahasiswa', [DataMahasiswaStaffController::class, 'create']);
Route::post('/staff/storeMahasiswa', [DataMahasiswaStaffController::class, 'store']);
Route::get('/staff/{NIK_Mahasiswa}/editMahasiswa', [DataMahasiswaStaffController::class, 'edit']);
Route::put('/staff/{NIK_Mahasiswa}/updateMahasiswa', [DataMahasiswaStaffController::class, 'update']);
Route::delete('/staff/{NIK_Mahasiswa}/destroyMahasiswa', [DataMahasiswaStaffController::class, 'destroy']);
Route::get('/staff/dataMahasiswa', [DataMahasiswaStaffController::class, 'search']);

//Data Dosen Di Staff
Route::get('/staff/dataDosen', [DataDosenStaffController::class, 'index']);
Route::get('/staff/tambahDosen', [DataDosenStaffController::class, 'create']);
Route::post('/staff/storeDosen', [DataDosenStaffController::class, 'store']);
Route::get('/staff/{NIK_Dosen}/editDosen', [DataDosenStaffController::class, 'edit']);
Route::put('/staff/{NIK_Dosen}/updateDosen', [DataDosenStaffController::class, 'update']);
Route::delete('/staff/{NIK_Dosen}/destroyDosen', [DataDosenStaffController::class, 'destroy']);
Route::get('/staff/dataDosen', [DataDosenStaffController::class, 'search']);

//Data Transaksi
Route::get('/staff/dataTransaksi', [DataTransaksiController::class, 'index']);
Route::get('/staff/tambahTransaksi', [DataTransaksiController::class, 'create']);
Route::post('/staff/storeTransaksi', [DataTransaksiController::class, 'store']);
Route::get('/staff/{id}/editTransaksi', [DataTransaksiController::class, 'edit']);
Route::put('/staff/{id}/updateTransaksi', [DataTransaksiController::class, 'update']);
Route::delete('/staff/{id}/destroyTransaksi', [DataTransaksiController::class, 'destroy']);
Route::get('/staff/dataTransaksi', [DataTransaksiController::class, 'search']);
Route::patch('/staff/{id}/updateStatus', [DataTransaksiController::class, 'updateStatus']);

//Data Laporan
Route::get('/staff/dataLaporanInventory', [DataLaporanController::class, 'showInventory']);
Route::get('/staff/dataLaporanInventory', [DataLaporanController::class, 'searchInventory']);
Route::get('/staff/dataLaporanAnggota', [DataLaporanController::class, 'showAnggota']);
Route::get('/staff/dataLaporanAnggota', [DataLaporanController::class, 'searchAnggota']);

//WAYAN PUNYA
// Tambahkan rute lain yang perlu diotentikasi di sini

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/lupapass', function () {
    return view('lupapass');
});
Route::post('/lupapass', [LupaPassController::class, 'update'])->name('lupapass.update');

Route::get('/signup', [DaftarController::class, 'create'])->name('signup.create');
Route::post('/signup', [DaftarController::class, 'store'])->name('signup.store');

Route::get('/signdosen', [DosenController::class, 'create'])->name('signdosen.create');
Route::post('/signdosen', [DosenController::class, 'store'])->name('signdosen.store');

//BAGAS PUNYA

Route::middleware(['web'])->group(function () {
    Route::get('/dashboardMHS', [HomeController::class, 'index'])->name('homeuser');
    Route::get('/dashboardDosen', [HomeController::class, 'indexDosen'])->name('homedosen');
    // Rute yang membutuhkan session
});


Route::get('/detail-buku/{ISBN}', [DetailBukuController::class, 'show'])->name('detail-buku');
Route::get('/buku/{ISBN}', [DetailBukuController::class, 'show'])->name('buku.show');

Route::get('/detail-buku-dosen/{ISBN}', [DetailBukuController::class, 'showDosen'])->name('detail-buku-dosen');
Route::get('/bukuDosen/{ISBN}', [DetailBukuController::class, 'showDosen'])->name('buku.showDosen');

Route::get('/pinjam-buku', [PinjamBukuController::class, 'index'])->name('pinjam-buku');
Route::get('/pinjam-buku-dosen', [PinjamBukuController::class, 'indexDosen'])->name('pinjam-buku-dosen');

Route::get('/detail-pinjam/{ISBN}', [DetailPinjamController::class, 'show'])->name('detail-pinjam');
Route::get('/detail-pinjam-dosen/{ISBN}', [DetailPinjamController::class, 'showDosen'])->name('detail-pinjam-dosen');

Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/bukuDosen', [BukuDosenController::class, 'index'])->name('bukuDosen.index');

Route::post('/dashboardMHS', [TransaksiController::class, 'store'])->name('transaksi.store');
Route::post('/dashboardDosen', [TransaksiController::class, 'storeDosen'])->name('transaksi.storeDosen');

Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat');
Route::get('/riwayatDosen', [RiwayatController::class, 'indexDosen'])->name('riwayatDosen');


Route::get('/search', function (Request $request) {
    $query = $request->input('query');

    $suggestions = Buku::where('judul', 'LIKE', '%' . $query . '%')->pluck('judul');

    return response()->json(['suggestions' => $suggestions]);
});

// routes/web.php

Route::post('/save-dates', [TransaksiController::class, 'saveDatesToSession'])->name('save_dates');




Route::get('/pinjam', function () {
    return view('pinjam', [
        "title" => "Pinjam Buku"
    ]);
});


Route::get('/favorit', function () {
    return view('favorit', [
        "title" => "Favorit"
    ]);
});

Route::get('/kartu', function () {
    return view('kartu', [
        "title" => "Kartu Anggota"
    ]);
});
Route::get('/kartuDosen', function () {
    return view('kartuDosen', [
        "title" => "Kartu Anggota"
    ]);
});

Route::get('/usul', function () {
    return view('usul', [
        "title" => "Usul Buku"
    ]);
});
Route::get('/usulDosen', function () {
    return view('usulDosen', [
        "title" => "Usul Buku"
    ]);
});

Route::get('/kritik', function () {
    return view('kritik', [
        "title" => "Kritik & Masukan"
    ]);
});
Route::get('/kritikDosen', function () {
    return view('kritikDosen', [
        "title" => "Kritik & Masukan"
    ]);
});
