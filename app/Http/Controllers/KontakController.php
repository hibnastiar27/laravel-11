<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $title = 'Kontak';
        $slug = 'kontak';
        return view('kontak', compact('slug', 'title'));
    }
}
