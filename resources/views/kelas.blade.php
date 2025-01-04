@extends('layouts.guest')

@section('content')
  {{-- CONTENT --}}
  <div class="flex flex-col gap-4 p-4 md:px-20">
    <div class="header text-center">
      <h1 class="text-4xl font-bold">KELAS LOG</h1>
      <p>Belajar bersama AriaLog</p>
    </div>

    <div class="kategori flex gap-2 *:rounded-md *:bg-red-100 *:p-2">
      <div>
        <a href="{{ route('kelas') }}" class="font-bold">Website</a>
      </div>
      <div>
        <a href="{{ route('kelas') }}" class="font-bold">Website</a>
      </div>
      <div>
        <a href="{{ route('kelas') }}" class="font-bold">Website</a>
      </div>
      <div>
        <a href="{{ route('kelas') }}" class="font-bold">Website</a>
      </div>
    </div>

    <div class="grid">
      <div class="card rounded-lg border p-4 hover:shadow-lg">
        <div class="card-header">
          <img src="{{ asset('img/html-sqr.png') }}" class="h-40 w-full rounded-md object-cover" alt="html">
        </div>
        <div class="card-body flex flex-col gap-2">
          <h1 class="text-2xl font-bold">Belajar membuat API dengan NodeJS</h1>

          <span class="flex gap-2">
            <span class="italic text-red-500 line-through">
              Rp 699,000
            </span>
            <span class="font-bold">
              Rp 149,000
            </span>
          </span>
        </div>
      </div>
    </div>
  @endsection
