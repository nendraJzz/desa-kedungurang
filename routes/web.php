<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\ProfileDesaController;

Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/wilayahdesa', [ProfileDesaController::class, 'wilayahdesa'])->name('wilayahdesa');
Route::get('/visidanmisidesa', [ProfileDesaController::class, 'visidanmisidesa'])->name('profiledesa.visidanmisidesa');
Route::get('/sejarahdesa', [ProfileDesaController::class, 'sejarahdesa'])->name('profiledesa.sejarahdesa');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Berita
    Route::get('/kelolaberita', [BeritaController::class, 'kelolaberita'])->name('admin.kelolaberita');
    Route::post('/addberita', [BeritaController::class, 'addberita'])->name('addberita');
    Route::get('delete/{id}', [BeritaController::class, 'delete'])->name('delete');
    Route::post('update/{id}', [BeritaController::class, 'update'])->name('update');

    // Penduduk
    Route::post('penduduk', [PendudukController::class, 'store'])->name('penduduk.store');
    Route::get('/admin/berita/{id}/edit', [BeritaController::class, 'edit'])->name('admin.editberita');
    Route::put('/admin/berita/{id}', [BeritaController::class, 'updateberita'])->name('admin.updateberita');
    
    // Calendar
    Route::get('/statistik', [AdminController::class, 'statistik'])->name('admin.statistikpenduduk');
    Route::get('/struktur', [AdminController::class, 'struktur'])->name('admin.strukturperangkatdesa');

});



require __DIR__.'/auth.php';
