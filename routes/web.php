<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Semua route web aplikasi kamu.
| Untuk saat ini, halaman admin belum menggunakan middleware.
|
*/

// 🔹 ROUTE UNTUK PENGUNJUNG

route::get('/', function () {
    return view('main');
});
Route::get('/gallery', fn() => view('gallery'))->name('gallery');
Route::get('/membership', fn() => view('membership'))->name('membership');


// 🔹 ROUTE UNTUK ADMIN
Route::prefix('admin')->group(function () {
    // Dashboard Admin
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Halaman Data Member
    Route::get('/datamember', [AdminController::class, 'datamember'])->name('admin.datamember');

    // Halaman Kelola Gallery
    Route::get('/kelolagallery', [AdminController::class, 'kelolagallery'])->name('admin.kelolagallery');

    Route::get('/kelolamember', [AdminController::class, 'kelolamember'])->name('admin.kelolamember');
});
