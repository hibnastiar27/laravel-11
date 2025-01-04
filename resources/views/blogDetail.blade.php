@extends('layouts.guest')

@section('content')
  {{-- CONTENT --}}
  <main>
    <div class="beredcum bg-slate-50 p-4 md:px-20">
      <a href="/blog" class="text-red-500 italic">Blog</a> / {{ $artikel['title'] }}
    </div>

    <article class="md:px-20 p-4">
      <div class="relative">
        <div
          class="absolute bottom-0 left-0 w-full h-full bg-gradient-to-t from-white to-white/50 rounded-xl border-2 border-slate-100">
        </div>
        <img class="w-full h-[200px] md:h-[400px] object-cover rounded-xl"
          src="https://plus.unsplash.com/premium_photo-1733514691599-d4a2eb3ca7ca?q=80&w=1171&auto=format&it=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          alt="">
        <div class="p-4 flex flex-col h-full justify-between absolute bottom-0 w-full rounded-b-xl">
          <h1 class="text-4xl font-bold mb-4">
            {{ $artikel['title'] }}
          </h1>

          <div class="flex justify-between items-center">
            <div class="flex gap-2 items-center">
              <img class="w-12 h-12 rounded-full object-cover" src="{{ asset('img/pp.jpg') }}" alt="">
              <div class="flex flex-col">
                <p class="font-medium">Nur Aria Hibnastiar</p>
                <p class="text-sm text-slate-600 italic">Fullstack Dev</p>
              </div>
            </div>

            <div class="text-right text-slate-500">
              <p>27 Desember 2022</p>
              <p>5 menit dibaca</p>
            </div>
          </div>
        </div>
      </div>

      <div class="body pt-4 text-base flex flex-col gap-4 text-justify">
        <p>
          {{ $artikel['content'] }}
        </p>
      </div>
    </article>
  </main>
@endsection
