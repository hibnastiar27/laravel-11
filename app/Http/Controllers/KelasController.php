<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $title = 'Kelas';
        $slug = 'kelas';
        return view('kelas', compact('slug', 'title'));
    }
}
