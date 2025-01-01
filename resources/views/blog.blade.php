@extends('layouts.dasboard')

@section('content')
{{-- CONTENT --}}
<div class="flex flex-col gap-4 px-20 py-4">
  <x-card gambar="img/html-sqr.png" judul="Tutorial HTML untuk Pemula">
    Belajar HTML dasar dari Nol. Pahami tag-tag esensial yang sering dipakai. Lalu buat sendiri websitemu
    dengan HTML.
    Selamat Belajar!
  </x-card>

  <x-card gambar="img/css-sqr.png" judul="Tutorial CSS untuk Pemula">
    Belajar CSS dasar dari Nol. Pahami properti-properti yang sering dipakai. Lalu buat sendiri websitemu dengan
    CSS. Selamat Belajar!
  </x-card>

  <x-card gambar="img/javascript.png" judul="Tutorial Javascript untuk Pemula">
    Javascript adalah bahasa universal yang bisa digunakan untuk membuat aplikasi web, server, desktop,
    mobile, game, IoT, dandsb.
  </x-card>
</div>
@endsection