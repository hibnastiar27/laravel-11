@extends('layouts.main')

@section('content')
  {{-- CONTENT --}}
  <div class="flex flex-col gap-4 p-4 sm:px-6 md:mx-auto md:max-w-screen-xl md:p-4">
    <div class="welcome mt-6">
      <div class="flex flex-col items-center gap-2 rounded-xl bg-slate-100 px-20 py-10">
        <p class="tracking-[0.5rem]">WELCOME TO ARIA[B]LOG</p>
        <h1 class="font-serif text-[42px] font-bold">Catatan <span class="italic text-blue-500 underline">Suka-Suka</span>,
          Bukan untuk
          <span class="text-blue-500">Serius-Serius</span>
        </h1>
      </div>
    </div>


    {{-- Blog Terbaru --}}
    <a href="/blog" class="card-latest group/item my-5 grid grid-cols-2 items-center gap-4 rounded-lg">
      <img src="{{ asset('img/html-sqr.png') }}" alt=""
        class="h-80 w-full rounded-lg object-cover duration-300 group-hover/item:shadow-2xl group-hover/item:shadow-blue-200">
      <div class="content flex flex-col gap-3 p-4">
        <div class="header flex items-center gap-2 text-black/50">
          <img src="{{ asset('img/html-sqr.png') }}" alt="" class="h-8 w-8 rounded-full">
          <span>author</span>
          <span>|</span>
          <span>date</span>
        </div>

        <div class="body flex flex-col gap-2">
          <h1 class="font-serif text-3xl font-bold duration-300 group-hover/item:text-blue-500">
            Reservable models in Laravel</h1>
          <p class="line-clamp-3 text-justify group-hover/item:line-clamp-5">
            As I'm in the process of
            rebuilding my
            personal site, I'm orchestrating a
            lot of 3rd
            party services. Pulling videos down from YouTube. Transcribing audio. Asking OpenAI for summaries of the
            transcripts, etc. I rely on Eloquent's scopes a lot to figure out what needs to be done. For example, here are
            several scopes from my Video model.</p>
        </div>

        <div class="kategori">
          <span class="font-serif font-semibold text-blue-500">Kategori</span>
          <span>|</span>
          <span>waktu baca</span>
        </div>
      </div>
    </a>


    <div class="flex flex-col">
      <span class="flex items-center justify-between">
        <h1 class="my-4 text-4xl font-bold">Tulisan Terbaru</h1>
        <a href="/blog" class="duration-300 hover:text-blue-500">See All -></a>
      </span>

      <div class="flex flex-col gap-4">
        @foreach ($posts as $post)
          <x-card :url="'/blog/' . $post['slug']" gambar="{{ $post['gambar'] }}" judul="{{ $post['title'] }}">
            {{ $post['content'] }}
          </x-card>
        @endforeach
      </div>
    </div>

  </div>
@endsection
