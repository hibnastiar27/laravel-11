@extends('layouts.dasboard')

@section('content')
  {{-- CONTENT --}}
  <div class="flex flex-col gap-4 px-20 py-4">
    @foreach ($posts as $post )
        <x-card :url="'/blog/' . $post['slug']" gambar="{{ $post['gambar'] }}" judul="{{ $post['title'] }}">
            {{ $post['content'] }}
        </x-card>
    @endforeach
  </div>
@endsection
