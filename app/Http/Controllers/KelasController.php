<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $title = 'Kelas';
        $data = [
            [
                'id' => 1,
                'title' => 'UI/UX & Web Design',
                'slug'=> 'uiux-web-design',
                'price-strike' => 'Rp. 1.000.000',
                'price' => 'Rp. 500.000',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'gambar' => 'img/html-sqr.png',
                'level' => 'Beginner',
            ],
            [
                'id' => 2,
                'title' => 'UI/UX & Web Design',
                'slug'=> 'uiux-web-design',
                'price-strike' => 'Rp. 1.000.000',
                'price' => 'Rp. 500.000',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'gambar' => 'img/css-sqr.png',
                'level' => 'Beginner',
            ],
            [
                'id' => 3,
                'title' => 'UI/UX & Web Design',
                'slug'=> 'uiux-web-design',
                'price-strike' => 'Rp. 1.000.000',
                'price' => 'Rp. 500.000',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'gambar' => 'img/javascript.png',
                'level' => 'Beginner',
            ],
            [
                'id' => 4,
                'title' => 'UI/UX & Web Design',
                'slug'=> 'uiux-web-design',
                'price-strike' => 'Rp. 1.000.000',
                'price' => 'Rp. 500.000',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'gambar' => 'img/javascript.png',
                'level' => 'Beginner',
            ],
            [
                'id' => 5,
                'title' => 'UI/UX & Web Design',
                'slug'=> 'uiux-web-design',
                'price-strike' => 'Rp. 1.000.000',
                'price' => 'Rp. 500.000',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'gambar' => 'img/javascript.png',
                'level' => 'Beginner',
            ],
        ];
        return view('kelas', compact('title'));
    }

    public function show ($url)
    {
        $title = 'Kelas';
        $data = [
            [
                'id' => 1,
                'title' => 'UI/UX & Web Design',
                'slug'=> 'uiux-web-design',
                'price-strike' => 'Rp. 1.000.000',
                'price' => 'Rp. 500.000',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'gambar' => 'img/html-sqr.png',
                'level' => 'Beginner',
            ],
            [
                'id' => 2,
                'title' => 'UI/UX & Web Design',
                'slug'=> 'uiux-web-design',
                'price-strike' => 'Rp. 1.000.000',
                'price' => 'Rp. 500.000',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'gambar' => 'img/css-sqr.png',
                'level' => 'Beginner',
            ],
            [
                'id' => 3,
                'title' => 'UI/UX & Web Design',
                'slug'=> 'uiux-web-design',
                'price-strike' => 'Rp. 1.000.000',
                'price' => 'Rp. 500.000',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'gambar' => 'img/javascript.png',
                'level' => 'Beginner',
            ],
            [
                'id' => 4,
                'title' => 'UI/UX & Web Design',
                'slug'=> 'uiux-web-design',
                'price-strike' => 'Rp. 1.000.000',
                'price' => 'Rp. 500.000',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'gambar' => 'img/javascript.png',
                'level' => 'Beginner',
            ],
            [
                'id' => 5,
                'title' => 'UI/UX & Web Design',
                'slug'=> 'uiux-web-design',
                'price-strike' => 'Rp. 1.000.000',
                'price' => 'Rp. 500.000',
                'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
                'gambar' => 'img/javascript.png',
                'level' => 'Beginner',
            ],
        ];

        $kelas = collect($data)->firstWhere('slug', $url);

        if (!$kelas) {
            abort(404);
        }

        return view('kelas', compact('title'));
    }
}
