<a href="{{ $url }}" class="card flex gap-4 p-4 items-center bg-white shadow-lg rounded-xl border-2 border-slate-100">
  <div class="card-header">
    <img src="{{ $gambar }}" class="w-60 rounded-xl" alt="html">
  </div>
  <div class="card-body flex flex-col gap-3">
    <h1 class="font-bold text-4xl">{{ $judul }}</h1>
    <p>{{ $slot }}</p>
  </div>
</a>
