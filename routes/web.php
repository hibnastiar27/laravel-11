<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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
