@extends('layouts.app')

@section('title', 'Manage Kategori')

@section('content')
  <section>
    {{-- <div class="header flex justify-between">
      <h1 class="text-2xl font-bold">Manage </h1>
      <a href="" class="rounded-lg bg-green-500 p-2 text-white duration-300 hover:bg-green-600">Tambah
      </a>
    </div> --}}
    <x-AdminHeader>Kategori</x-AdminHeader>

    <x-AdminTable :columns="$columns" :rows="$kategori" route="kategori" />

  </section>
@endsection
