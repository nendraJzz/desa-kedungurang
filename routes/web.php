<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileDesaController;

Route::get('/index', [HomeController::class, 'index'])->name('index');
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
    
    // Calendar
    Route::get('/calendar', [AdminController::class, 'calendar'])->name('admin.calendar');

});



require __DIR__.'/auth.php';
