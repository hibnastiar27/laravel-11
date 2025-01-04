<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return 'Selamat datang di website saya booos akuuu';
});


Route::get('/about', function () {
  return view('about', [
    'nama' => 'Aria',
  ]);
});

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::get('/kelas', [KelasController::class,'index'])->name('kelas');
Route::get('/kelas/{slug}', [KelasController::class, 'show'])->name('kelas.show');
