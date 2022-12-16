<?php

use App\Models\Karyawan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\KaryawanController;

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/login', function(){
    return view('auth.login');
});
Route::controller(main_layout::class)->group(function(){
    Route::get('/layouts/home','home');
    Route::get('/layouts/index','index');
});

//Admin
// Route::get('/', [AdminController::class, 'index'])->name('index');
// Route::view('/karyawan/karyawan-home','karyawan.karyawan-home');
// Route::get('/', [KaryawanController::class, 'index']);
// Route::get('karyawan/karyawan-home', [AdminController::class, 'index'])->name('index2');
//ADMIN HALAMAN UTAMA
// Route::get('/admin', [AdminController::class,'index'])->name('index');
//ADMIN HALAMAN MENU DATA KARYAWAN
//Route::get('/admin/karyawan-home', [AdminController::class,'dataKaryawan'])->name('dataKaryawan');

Route::controller(JabatanController::class)->group(function () {
    //get data karyawan
    // Route::get('/admin/karyawan-home', 'showKaryawan')->name('showKaryawan');
    // Route::get('/admin/karyawan-add', 'addKaryawan');
    // Route::get('/admin/karyawan-edit/{id-Karyawan}', 'editKaryawan');
    //get data jabatan
    // Route::get('/admin/jabatan-home', 'showJabatan')->name('showJabatan');
    // Route::get('/admin/jabatan-add', 'addJabatan');
    // Route::get('/admin/jabatan-edit/{id_jabatan}', 'editJabatan');
    //post
    // Route::post('/admin/karyawan-simpan', 'saveKaryawan');
    // Route::post('/admin/jabatan-simpan', 'saveJabatan');

    // Route::put('/admin/karyawan-update','updateKaryawan');
    // Route::put('/admin/jabatan-update','updateJabatan');

    // Route::delete('/admin/hapus/{id-karyawan}','deleteKaryawan');
    // Route::delete('/admin/jabatan-hapus/{id_jabatan}','hapusJabatan');
    // Route::post('/orders', 'store');

});
//ELOQUENT ROUTE
// =================KARYAWAN===========================
Route::get('/admin/karyawan-add', [AdminController::class,'addKaryawan'])->name('addKaryawan');
Route::post('/admin/karyawan-store', [AdminController::class,'storeKaryawan'])->name('storeKaryawan');
Route::get('/admin/karyawan-home', [AdminController::class,'showKaryawan'])->name('show');
Route::get('/admin/karyawan-edit/{id}', [AdminController::class,'editKaryawan'])->name('edit');
Route::put('/admin/karyawan-edit/{id}', [AdminController::class,'updateKaryawan'])->name('update');
Route::get('/admin/hapus-karyawan/{id}', [AdminController::class,'hapusKaryawan'])->name('hapus');

// ====================KATEGORI=============================

Route::get('/admin/kategori-add', [AdminController::class,'addKategori'])->name('addKategori');
Route::post('/admin/kategori-store', [AdminController::class,'storeKategori'])->name('storeKategori');
Route::get('/admin/kategori-home', [AdminController::class,'showKategori'])->name('showKategori');
Route::get('/admin/kategori-edit/{id}', [AdminController::class,'editKategori'])->name('editKategori');
Route::put('/admin/kategori-edit/{id}', [AdminController::class,'updateKategori'])->name('updateKategori');
Route::get('/admin/hapus-kategori/{id}', [AdminController::class,'hapusKategori'])->name('hapusKategori');


// ====================MENU=============================

Route::get('/admin/menu-add', [AdminController::class,'addMenu'])->name('addMenu');
Route::post('/admin/menu-store', [AdminController::class,'storeMenu'])->name('storeMenu');
Route::get('/admin/menu-home', [AdminController::class,'showMenu'])->name('showMenu');
Route::get('/admin/menu-edit/{id}', [AdminController::class,'editMenu'])->name('editMenu');
Route::put('/admin/menu-edit/{id}', [AdminController::class,'updateMenu'])->name('updateMenu');
Route::get('/admin/hapus-menu/{id}', [AdminController::class,'hapusMenu'])->name('hapusMenu');

// ====================JABATAN===========================
Route::get('/admin/jabatan-add', [JabatanController::class,'addJabatan'])->name('addJabatan');
Route::post('/admin/jabatan-store', [JabatanController::class,'storeJabatan'])->name('storeJabatan');
Route::get('/admin/jabatan-home', [JabatanController::class,'showJabatan'])->name('showJabatan');
Route::get('/admin/jabatan-edit/{id}', [JabatanController::class,'editJabatan'])->name('editJabatan');
Route::put('/admin/jabatan-edit/{id}', [JabatanController::class,'updateJabatan'])->name('updateJabatan');
Route::get('/admin/jabatan-menu/{id}', [JabatanController::class,'hapusJabatan'])->name('hapusJabatan');

// ====================MEJA===========================
Route::get('/admin/meja-add', [AdminController::class,'addMeja'])->name('addMeja');
Route::post('/admin/meja-store', [AdminController::class,'storeMeja'])->name('storeMeja');
Route::get('/admin/meja-home', [AdminController::class,'showMeja'])->name('showMeja');
Route::get('/admin/meja-edit/{id}', [AdminController::class,'editMeja'])->name('editMeja');
Route::put('/admin/meja-edit/{id}', [AdminController::class,'updateMeja'])->name('updateMeja');
Route::get('/admin/meja-hapus/{id}', [AdminController::class,'hapusMeja'])->name('hapusMeja');

// ====================PEMESANAN===========================
Route::get('/admin/form-pilihmeja', [MejaController::class,'formPilihMeja'])->name('formPilihMeja');
Route::get('/admin/form-pemesanan', [MejaController::class,'formPemesanan'])->name('formPemesanan');
Route::post('/admin/form-pemesanan', [MejaController::class,'storePemesanan'])->name('storePemesanan');
// Route::get('/admin/meja-home', [AdminController::class,'showMeja'])->name('showMeja');
// Route::get('/admin/meja-edit/{id}', [AdminController::class,'editMeja'])->name('editMeja');
// Route::put('/admin/meja-edit/{id}', [AdminController::class,'updateMeja'])->name('updateMeja');
// Route::get('/admin/meja-hapus/{id}', [AdminController::class,'hapusMeja'])->name('hapusMeja');

// ====================LOGIN===========================
Route::get('/auth/login', [SessionController::class,'tampilLogin'])->name('tampilLogin');
Route::post('/auth/loginUser', [SessionController::class,'Login'])->name('Login');


// Route::controller(AdminController::class)->group(function () {
//     Route::get('/karyawan/karyawan-home', 'index')->name('index3');
//     Route::get('/karyawan/karyawan-add', 'add');
//     Route::get('/karyawan/karyawan-edit/{id-Karyawan}', 'edit');
//     Route::put('/karyawan/karyawan-update','update');
//     Route::delete('/karyawan/hapus/{id-karyawan}','delete');
//     Route::post('/orders', 'store');
// });