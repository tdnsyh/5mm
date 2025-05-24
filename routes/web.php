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
use App\Http\Controllers\Web\WebPesananController;
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
Route::get('/paket/detail', [WebPaketController::class, 'detailPaket']);
Route::get('/portofolio', [WebPortofolioController::class, 'index']);
Route::get('/artikel', [WebArtikelController::class, 'index']);
Route::get('/keranjang', [WebKeranjangController::class, 'index']);
Route::get('/pesanan', [WebPesananController::class, 'index']);
Route::get('/profil', [WebProfilController::class, 'index']);


// route admin
Route::middleware(['auth', RoleMiddleware::class . ':admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard.index');
    Route::get('/admin/jadwal', [AdminJadwalController::class, 'index']);
    Route::get('/admin/pesanan', [AdminPesananController::class, 'index']);
    Route::get('/admin/pembayaran', [AdminPembayaranController::class, 'index']);
    Route::get('/admin/paket', [AdminPaketController::class, 'index']);
    Route::resource('/admin/artikel', AdminArtikelController::class);
    Route::resource('/admin/portofolio', AdminPortofolioController::class);
    Route::get('/admin/testimoni', [AdminTestimoniController::class, 'index']);
    Route::resource('/admin/pengguna', AdminPenggunaController::class);
    Route::get('/admin/laporan', [AdminLaporanController::class, 'index']);
});