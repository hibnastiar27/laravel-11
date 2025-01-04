@extends('layouts.guest')

@section('content')
{{-- CONTENT --}}
<main class="h-screen">
  <div class="grid md:grid-cols-3 gap-4 p-6 md:px-20">
    <div class="md:col-span-1">
      <h1 class="text-4xl font-bold">Connect With Us</h1>
      <div class="sosmed flex gap-4 mt-4">
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
    <form class="md:col-span-2 flex flex-col gap-4">
      <label class="font-medium" for="email">Email</label>
      <input type="text" class="border rounded p-2 focus:outline-red-500" placeholder="Masukan Email" id="email">

      <label class="font-medium" for="pesan">Pesan</label>
      <textarea class="border rounded p-2 focus:outline-red-500" placeholder="Ketik Pesan" name="pesan" id="pesan"
        cols="30" rows="10"></textarea>

      <button class="border rounded-md px-4 py-2 bg-red-500 text-white">Kirim</button>
    </form>
  </div>
</main>
@endsection
