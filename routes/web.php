<?php

use App\Http\Controllers\Admin\AdminArtikelController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminJadwalController;
use App\Http\Controllers\Admin\AdminLaporanController;
use App\Http\Controllers\Admin\AdminPaketController;
use App\Http\Controllers\Admin\AdminPembayaranController;
use App\Http\Controllers\Admin\AdminPenggunaController;
use App\Http\Controllers\Admin\AdminPesananController;
use App\Http\Controllers\Admin\AdminPortofolioController;
use App\Http\Controllers\Admin\AdminTestimoniController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Web\WebArtikelController;
use App\Http\Controllers\Web\WebIndexController;
use App\Http\Controllers\Web\WebKeranjangController;
use App\Http\Controllers\Web\WebPaketController;
use App\Http\Controllers\Web\WebPortofolioController;
use App\Http\Controllers\Web\WebProfilController;
use App\Http\Controllers\Web\WebTentangController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Route;


// auth route
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// web route
Route::get('/', [WebIndexController::class, 'index'])->name('home');
Route::get('/tentang', [WebTentangController::class, 'index']);
Route::get('/paket', [WebPaketController::class, 'index']);
Route::get('/paket-detail/{id}', [WebPaketController::class, 'show'])->name('paket.detail');
Route::get('/portofolio', [WebPortofolioController::class, 'index']);
Route::get('/artikel', [WebArtikelController::class, 'index'])->name('daftar.berita');
Route::get('/artikel/{kategori}/{id}/{judul}', [WebArtikelController::class, 'detail'])->name('detail.berita');

Route::middleware(['auth', RoleMiddleware::class . ':user'])->group(function () {
    // keranjang
    Route::get('/keranjang', [WebKeranjangController::class, 'index'])->name('keranjang.index');
    Route::post('/keranjang/tambah/{id}', [WebKeranjangController::class, 'tambah'])->name('keranjang.tambah');
    Route::delete('/keranjang/hapus/{id}', [WebKeranjangController::class, 'hapus'])->name('keranjang.hapus');
    // pesanan
    Route::get('/pesanan', [WebKeranjangController::class, 'pesananSaya'])->name('reservasi.index');
    Route::post('/pesanan', [WebKeranjangController::class, 'store'])->name('reservasi.store');
    Route::get('/pesanan/{paket}', [WebKeranjangController::class, 'create'])->name('reservasi.form');
    Route::get('/pesanan/bayar/{id}', [WebKeranjangController::class, 'formPembayaran'])->name('reservasi.bayar.form');
    Route::post('/pesanan/bayar/{id}', [WebKeranjangController::class, 'prosesPembayaran'])->name('reservasi.bayar.proses');
    // testimoni
    Route::post('/testimoni/{id}', [WebKeranjangController::class, 'storeTestimoni'])->name('testimoni.store');
    Route::get('/testimoni/{id}/form', [WebKeranjangController::class, 'createTestimoni'])->name('testimoni.form');
    // profil
    Route::get('/profil', [WebProfilController::class, 'profil'])->name('profile.index');
    Route::post('/profile', [WebProfilController::class, 'update'])->name('profile.update');
});

// route admin
Route::middleware(['auth', RoleMiddleware::class . ':admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard.index');
    Route::get('/admin/jadwal', [AdminJadwalController::class, 'index']);
    Route::get('/admin/pesanan', [AdminPesananController::class, 'index']);
    // pesanan
    Route::get('/admin/pesanan/{id}', [AdminPesananController::class, 'show'])->name('admin.reservasi.show');
    Route::post('/admin/pesanan/{id}/update', [AdminPesananController::class, 'update'])->name('admin.reservasi.update');
    Route::post('/admin/pesanan/konfirmasi/{id}', [AdminPesananController::class, 'konfirmasi'])->name('admin.reservasi.konfirmasi');
    // pembayaran
    Route::get('/admin/pembayaran', [AdminPembayaranController::class, 'index']);
    Route::resource('/admin/paket', AdminPaketController::class);
    Route::resource('/admin/artikel', AdminArtikelController::class);
    Route::resource('/admin/portofolio', AdminPortofolioController::class);
    Route::get('/admin/testimoni', [AdminTestimoniController::class, 'index']);
    Route::resource('/admin/pengguna', AdminPenggunaController::class);
    Route::get('/admin/laporan', [AdminLaporanController::class, 'index']);
});