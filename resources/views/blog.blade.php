@extends('layouts.guest')

@section('content')
  {{-- CONTENT --}}
  <div class="flex flex-col gap-4 p-4 sm:px-6 md:mx-auto md:max-w-screen-xl md:p-4">
    @foreach ($posts as $post)
      <x-card :url="'/blog/' . $post['slug']" gambar="{{ $post['gambar'] }}" judul="{{ $post['title'] }}">
        {{ $post['content'] }}
      </x-card>
    @endforeach
  </div>
@endsection
