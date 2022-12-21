<?php

use App\Models\Karyawan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\KaryawanController;

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/qrcode', function () {
    return view('qrccode');
});
Route::get('/halamancheckout', function () {
    return view('pemesanan.halamanCheckout');
});
Route::get('/login', function(){
    return view('auth.login');
});
Route::controller(main_layout::class)->group(function(){
    Route::get('/layouts/home','home');
    Route::get('/layouts/index','index');
});
// Route::get('/qrcode', [Controller::class,'qrcode'])->name('qrcode');

// ====================PEMESANAN===========================
Route::get('/admin/halaman-pemesanan', [KasirController::class,'halamanPemesanan'])->name('halamanPemesanan');
Route::get('/admin/pemesanan-add', [KasirController::class,'pemesananAdd'])->name('pemesananAdd');
Route::get('/admin/pemesanan-edit/{id}', [KasirController::class,'pemesananEdit'])->name('pemesananEdit');
Route::put('/admin/pemesanan-edit/{id}', [KasirController::class,'pemesananUpdate'])->name('pemesananUpdate');
//scan qr dari kasir ke customer
Route::post('/admin/pemesanan-validasi', [KasirController::class,'validasi'])->name('validasi');
//
Route::get('/admin/halaman-pemesanan/sudahbayar', [KasirController::class,'halamanPemesananSudahBayar'])->name('halamanPemesananSudahBayar');
Route::post('/admin/halaman-pemesanan', [KasirController::class,'storePemesanan'])->name('storePemesanan');
Route::get('/admin/pemesanan-pilihmeja', [KasirController::class,'formPilihMeja'])->name('formPilihMeja');
// Route::put('/admin/pemesanan-pilihmeja/{id}', [MejaController::class,'formPilihMeja'])->name('formPilihMeja');
Route::get('/admin/pemesanan-pesanpilihmeja', [MejaController::class,'formPesanPilihMeja'])->name('formPesanPilihMeja');
Route::get('/admin/pemesanan-checkout', [MejaController::class,'halamancheckout'])->name('halamanCheckout');
Route::put('/admin/pemesanan-pesanpilihmeja/{id}', [MejaController::class,'storeOrderPelanggan'])->name('storeOrderPelanggan');
// Route::get('/admin/meja-home', [AdminController::class,'showMeja'])->name('showMeja');
// Route::get('/admin/meja-edit/{id}', [AdminController::class,'editMeja'])->name('editMeja');
// Route::put('/admin/meja-edit/{id}', [AdminController::class,'updateMeja'])->name('updateMeja');
// Route::get('/admin/meja-hapus/{id}', [AdminController::class,'hapusMeja'])->name('hapusMeja');

// ====================ORDER===========================

Route::get('/admin/order-scanOrderKasir', [KasirController::class,'scanOrderKasir'])->name('scanOrderKasir');
Route::get('/admin/halaman-order', [KasirController::class,'halamanOrder'])->name('halamanOrder');
Route::get('/admin/cetak-order', [KasirController::class,'cetakOrder'])->name('cetakOrder');
Route::get('/admin/halaman-order/bayar', [KasirController::class,'halamanOrderBayar'])->name('halamanOrderBayar');
Route::post('/admin/order-scanOrderKasir', [KasirController::class,'storeOrder'])->name('storeOrder');


// ====================LOGIN===========================
Route::get('/auth/login', [SessionController::class,'tampilLogin'])->name('tampilLogin');
Route::get('/auth/logout', [SessionController::class,'tampilLogin'])->name('logout');
// Route::get('/auth/login', [SessionController::class,'tampilLogin'])->name('tampilLogin');
Route::post('/auth/loginUser', [SessionController::class,'Login'])->name('Login');

// ====================REGISTER===========================
// Route::get('/auth/register', [SessionController::class,'tampilRegister'])->name('tampilRegister');
// Route::post('/auth/register', [SessionController::class,'registerStore'])->name('registerStore');

// Route::controller(AdminController::class)->group(function () {
//     Route::get('/karyawan/karyawan-home', 'index')->name('index3');
//     Route::get('/karyawan/karyawan-add', 'add');
//     Route::get('/karyawan/karyawan-edit/{id-Karyawan}', 'edit');
//     Route::put('/karyawan/karyawan-update','update');
//     Route::delete('/karyawan/hapus/{id-karyawan}','delete');
//     Route::post('/orders', 'store');
// });

//level admin
Route::middleware('auth', 'validatelevels:admin')->group(function () {
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

// ====================MEJA===========================
Route::get('/admin/meja-add', [AdminController::class,'addMeja'])->name('addMeja');
Route::post('/admin/meja-store', [AdminController::class,'storeMeja'])->name('storeMeja');
Route::get('/admin/meja-home', [AdminController::class,'showMeja'])->name('showMeja');
Route::get('/admin/meja-edit/{id}', [AdminController::class,'editMeja'])->name('editMeja');
Route::put('/admin/meja-edit/{id}', [AdminController::class,'updateMeja'])->name('updateMeja');
Route::get('/admin/meja-hapus/{id}', [AdminController::class,'hapusMeja'])->name('hapusMeja');

// =================USER===========================
Route::get('/admin/user-add', [SessionController::class,'addUser'])->name('addUser');
Route::post('/admin/user-store', [SessionController::class,'storeUser'])->name('storeUser');
Route::get('/admin/user-home', [SessionController::class,'showUser'])->name('showUser');
Route::get('/admin/user-edit/{id}', [SessionController::class,'editUser'])->name('editUser');
Route::put('/admin/user-edit/{id}', [SessionController::class,'updateUser'])->name('updateUser');
Route::get('/admin/hapus-user/{id}', [SessionController::class,'hapusUser'])->name('hapusUser');

// ====================JABATAN===========================
Route::get('/admin/jabatan-add', [JabatanController::class,'addJabatan'])->name('addJabatan');
Route::post('/admin/jabatan-store', [JabatanController::class,'storeJabatan'])->name('storeJabatan');
Route::get('/admin/jabatan-home', [JabatanController::class,'showJabatan'])->name('showJabatan');
Route::get('/admin/jabatan-edit/{id}', [JabatanController::class,'editJabatan'])->name('editJabatan');
Route::put('/admin/jabatan-edit/{id}', [JabatanController::class,'updateJabatan'])->name('updateJabatan');
Route::get('/admin/jabatan-menu/{id}', [JabatanController::class,'hapusJabatan'])->name('hapusJabatan');
});

//level kasir
Route::middleware('auth', 'validatelevels:kasir')->group(function () {

});

//level k.produksi
Route::middleware('auth', 'validatelevels:produksi')->group(function () {

});

//level customer
Route::middleware('auth', 'validatelevels:4')->group(function () {

});