<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfileController;
use App\Models\Artikel;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});


Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function() {
        return view('dashboard.dashboard');
    })->name('dashboard');

    Route::prefix('kategori')->group(function () {
        Route::get('/', [KategoriController::class,'index'])->name('kategori');
        Route::get('/create', [KategoriController::class,'create'])->name('kategori.create');
        Route::post('/', [KategoriController::class,'store'])->name('kategori.store');
        Route::get('/edit/{id}', [KategoriController::class,'edit'])->name('kategori.edit');
        Route::put('/{id}', [KategoriController::class,'update'])->name('kategori.update');
        Route::delete('/{id}', [KategoriController::class,'destroy'])->name('kategori.destroy');
    });
    Route::get('/artikel', [ArtikelController::class,'index'])->name('artikel');
});

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::get('/kelas', [KelasController::class,'index'])->name('kelas');
Route::get('/kelas/{slug}', [KelasController::class, 'show'])->name('kelas.show');

require __DIR__.'/auth.php';
