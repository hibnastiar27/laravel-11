@extends('layouts.guest')

@section('content')
  {{-- CONTENT --}}
  <main class="md:mx-auto md:max-w-screen-xl">
    <div class="beredcum p-4 font-medium">
      <a href="/blog" class="italic text-blue-500 hover:text-blue-700 hover:underline">Blog</a> /
      {{ $artikel['title'] }}
    </div>

    <article class="p-4 pt-0">
      <div class="relative">
        <div
          class="absolute bottom-0 left-0 h-full w-full rounded-xl bg-gradient-to-t from-white to-white/0 backdrop-blur-sm hover:border-blue-500">
        </div>
        <img class="h-[200px] w-full rounded-xl object-cover md:h-[400px]"
          src="https://plus.unsplash.com/premium_photo-1733514691599-d4a2eb3ca7ca?q=80&w=1171&auto=format&it=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          alt="">
        <div class="absolute bottom-0 flex h-full w-full flex-col justify-between rounded-b-xl p-4">
          <div class="mb-4 flex h-full items-center justify-center text-4xl font-bold">
            <h1 class="">
              {{ $artikel['title'] }}
            </h1>
          </div>

          <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
              <img class="h-12 w-12 rounded-full object-cover" src="{{ asset('img/pp.jpg') }}" alt="">
              <div class="flex flex-col">
                <p class="font-medium">Nur Aria Hibnastiar</p>
                <p class="text-sm italic text-blue-600">Fullstack Dev</p>
              </div>
            </div>

            <div class="text-right text-slate-500">
              <p>27 Desember 2022</p>
              <p>5 menit dibaca</p>
            </div>
          </div>
        </div>
      </div>

      <div class="body flex flex-col gap-4 pt-4 text-justify text-base">
        <p>
          {{ $artikel['content'] }}
        </p>
      </div>
    </article>

    <h1 class="p-4 text-2xl font-bold">Artikel Terbaru</h1>
  </main>
@endsection
