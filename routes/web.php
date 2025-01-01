<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});


Route::get('/about', function () {
  return view('about', [
    'nama' => 'Aria',
  ]);
});

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');


//  -> ->>>>>
//  =/


// 2 rute baru
// 1. /blog [2 buah artikel, judul & isi]
// 2. /contact [email sosmed / apapun]
