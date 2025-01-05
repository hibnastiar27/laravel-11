@extends('layouts.guest')

@section('content')
  {{-- CONTENT --}}
  <div class="flex flex-col gap-4 p-4 sm:px-6 md:mx-auto md:max-w-screen-xl md:p-4">
    <div class="header">
      <p class="font-medium italic text-blue-500">#NeverStopLearning</p>
      <h1 class="mb-2 text-4xl font-bold">Kelas Log</h1>
      <p>Belajar bersama AriaLog.</p>
    </div>

    <div class="kategori flex flex-col gap-2">
      <h1 class="header text-2xl font-bold">
        Popular Category
      </h1>
      <div class="overflow-x-auto">
        <div
          class="menu flex w-max gap-4 *:w-max *:rounded-md *:border-2 *:border-transparent *:p-3 *:font-medium *:duration-300">
          <a href="{{ route('kelas') }}" class="flex items-center gap-2 bg-slate-100 hover:border-blue-500">
            <img src="{{ asset('img/ic_roadmap.svg') }}" alt="roadmap" class="h-10 w-10">
            <p>UI/UX & Web Design</p>
          </a>
          <a href="{{ route('kelas') }}" class="flex items-center gap-2 bg-slate-100 hover:border-blue-500">
            <img src="{{ asset('img/ic_fedev.svg') }}" alt="" class="h-10 w-10">
            <p>Website Development</p>
          </a>
          <a href="{{ route('kelas') }}" class="flex items-center gap-2 bg-slate-100 hover:border-blue-500">
            <img src="{{ asset('img/ic_flutter.svg') }}" alt="" class="h-10 w-10">
            <p>Mobile Development</p>
          </a>
          <a href="{{ route('kelas') }}" class="flex items-center gap-2 bg-slate-100 hover:border-blue-500">
            <img src="{{ asset('img/ic_data_scientist.svg') }}" alt="" class="h-10 w-10">
            <p>Data Analysis</p>
          </a>
        </div>
      </div>
    </div>

    <div class="tools flex flex-col gap-2">
      <h1 class="header text-2xl font-bold">
        Popular Tools
      </h1>
      <div class="overflow-x-auto">
        <div
          class="menu flex w-max gap-4 *:w-max *:rounded-md *:border-2 *:border-transparent *:p-3 *:font-medium *:duration-300">
          <a href="{{ route('kelas') }}" class="flex items-center gap-2 bg-slate-100 hover:border-blue-500">
            <img src="{{ asset('img/laravel.svg') }}" alt="" class="h-10 w-10">
            <p>Laravel</p>
          </a>
          <a href="{{ route('kelas') }}" class="flex items-center gap-2 bg-slate-100 hover:border-blue-500">
            <img src="{{ asset('img/tailwindcss.svg') }}" alt="" class="h-10 w-10">
            <p>Tailwindcss</p>
          </a>
          <a href="{{ route('kelas') }}" class="flex items-center gap-2 bg-slate-100 hover:border-blue-500">
            <img src="{{ asset('img/react.svg') }}" alt="" class="h-10 w-10">
            <p>React JS</p>
          </a>
          <a href="{{ route('kelas') }}" class="flex items-center gap-2 bg-slate-100 hover:border-blue-500">
            <img src="{{ asset('img/python.png') }}" alt="" class="h-10">
            <p>Python</p>
          </a>
        </div>
      </div>
    </div>

    <h1 class="header text-2xl font-bold">Terbaru Dirilis</h1>

    <div class="overflow-x-auto">
      <div
        class="flex w-max gap-4 border-2 border-transparent *:duration-300 lg:grid lg:w-fit lg:grid-cols-4 *:lg:w-full">
        <a href="{{ route('kelas') }}" class="card w-72 rounded-xl border p-3 hover:border-blue-500 hover:shadow-lg">
          <div class="card-header">
            <img src="{{ asset('img/html-sqr.png') }}" class="h-40 w-full rounded-lg object-cover" alt="html">
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

            <div class="rating flex gap-1">
              <img src="{{ asset('img/ic_star.svg') }}" alt="star" class="h-5 w-5">
              <img src="{{ asset('img/ic_star.svg') }}" alt="star" class="h-5 w-5">
              <img src="{{ asset('img/ic_star.svg') }}" alt="star" class="h-5 w-5">
              <img src="{{ asset('img/ic_star.svg') }}" alt="star" class="h-5 w-5">
              <img src="{{ asset('img/ic_star.svg') }}" alt="star" class="h-5 w-5">
            </div>
          </div>
        </a>
        <a href="{{ route('kelas') }}" class="card w-72 rounded-xl border p-3 hover:border-blue-500 hover:shadow-lg">
          <div class="card-header">
            <img src="{{ asset('img/html-sqr.png') }}" class="h-40 w-full rounded-lg object-cover" alt="html">
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

            <div class="rating flex gap-1">
              <img src="{{ asset('img/ic_star.svg') }}" alt="star" class="h-5 w-5">
              <img src="{{ asset('img/ic_star.svg') }}" alt="star" class="h-5 w-5">
              <img src="{{ asset('img/ic_star.svg') }}" alt="star" class="h-5 w-5">
              <img src="{{ asset('img/ic_star.svg') }}" alt="star" class="h-5 w-5">
              <img src="{{ asset('img/ic_star.svg') }}" alt="star" class="h-5 w-5">
            </div>
          </div>
        </a>
        <a href="{{ route('kelas') }}" class="card w-72 rounded-xl border p-3 hover:border-blue-500 hover:shadow-lg">
          <div class="card-header">
            <img src="{{ asset('img/html-sqr.png') }}" class="h-40 w-full rounded-lg object-cover" alt="html">
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

            <div class="rating flex gap-1">
              <img src="{{ asset('img/ic_star.svg') }}" alt="star" class="h-5 w-5">
              <img src="{{ asset('img/ic_star.svg') }}" alt="star" class="h-5 w-5">
              <img src="{{ asset('img/ic_star.svg') }}" alt="star" class="h-5 w-5">
              <img src="{{ asset('img/ic_star.svg') }}" alt="star" class="h-5 w-5">
              <img src="{{ asset('img/ic_star.svg') }}" alt="star" class="h-5 w-5">
            </div>
          </div>
        </a>
        <a href="{{ route('kelas') }}" class="card w-72 rounded-xl border p-3 hover:border-blue-500 hover:shadow-lg">
          <div class="card-header">
            <img src="{{ asset('img/html-sqr.png') }}" class="h-40 w-full rounded-lg object-cover" alt="html">
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

            <div class="rating flex gap-1">
              <img src="{{ asset('img/ic_star.svg') }}" alt="star" class="h-5 w-5">
              <img src="{{ asset('img/ic_star.svg') }}" alt="star" class="h-5 w-5">
              <img src="{{ asset('img/ic_star.svg') }}" alt="star" class="h-5 w-5">
              <img src="{{ asset('img/ic_star.svg') }}" alt="star" class="h-5 w-5">
              <img src="{{ asset('img/ic_star.svg') }}" alt="star" class="h-5 w-5">
            </div>
          </div>
        </a>
        <a href="{{ route('kelas') }}" class="card w-72 rounded-xl border p-3 hover:border-blue-500 hover:shadow-lg">
          <div class="card-header">
            <img src="{{ asset('img/html-sqr.png') }}" class="h-40 w-full rounded-lg object-cover" alt="html">
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

            <div class="rating flex gap-1">
              <img src="{{ asset('img/ic_star.svg') }}" alt="star" class="h-5 w-5">
              <img src="{{ asset('img/ic_star.svg') }}" alt="star" class="h-5 w-5">
              <img src="{{ asset('img/ic_star.svg') }}" alt="star" class="h-5 w-5">
              <img src="{{ asset('img/ic_star.svg') }}" alt="star" class="h-5 w-5">
              <img src="{{ asset('img/ic_star.svg') }}" alt="star" class="h-5 w-5">
            </div>
          </div>
        </a>
      </div>
    </div>
  @endsection
