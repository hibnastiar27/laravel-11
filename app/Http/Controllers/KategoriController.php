<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{

    public function index() {
        $kategori = [
            ['id' => 1, 'kategori' =>'Javascript'],
            ['id' => 2, 'kategori' =>'Python'],
            ['id' => 3, 'kategori' =>'Laravel'],
        ];


        $columns = ['Kategori'];
        return view('dashboard.kategori', compact('kategori','columns'));
    }
}
