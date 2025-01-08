@extends('layouts.main')

@section('content')
  {{-- CONTENT --}}
  <div class="grid gap-4 p-6 md:m-auto md:max-w-screen-lg md:grid-cols-3">
    <div class="md:col-span-1">
      <h1 class="text-4xl font-bold">Connect With Us</h1>
      <div class="sosmed mt-4 flex gap-4">
        <a href="https://www.instagram.com/aria.justtry/" target="_blank">
          <img src="img/instagram.png" class="w-12" alt="instagram">
        </a>
        <a href="https://www.facebook.com/nurhibnastiar/" target="_blank">
          <img src="img/facebook.png" class="w-12" alt="facebook">
        </a>
        <a href="https://www.x.com/arialog1/" target="_blank">
          <img src="img/twitter.png" class="w-12" alt="x">
        </a>
      </div>
    </div>
    <form class="flex flex-col gap-4 md:col-span-2">
      <div class="flex flex-col gap-2">
        <label class="font-medium" for="email">Email</label>
        <input type="text" class="rounded-lg border p-2 focus:outline-blue-500" placeholder="Masukan Email"
          id="email">
      </div>

      <div class="flex flex-col gap-2">
        <label class="font-medium" for="pesan">Pesan</label>
        <textarea class="rounded-lg border p-2 focus:outline-blue-500" placeholder="Ketik Pesan" name="pesan" id="pesan"
          cols="30" rows="10"></textarea>
      </div>

      <button class="rounded-lg border bg-gradient-to-r from-blue-900 to-blue-500 p-3 text-white">Kirim</button>
    </form>
  </div>
@endsection
