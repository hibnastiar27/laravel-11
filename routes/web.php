<?php

use App\Http\Controllers\BlogController;
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


//  -> ->>>>>
//  =/


// 2 rute baru
// 1. /blog [2 buah artikel, judul & isi]
// 2. /contact [email sosmed / apapun]
