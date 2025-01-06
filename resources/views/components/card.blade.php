<a href="{{ $url }}"
  class="card flex flex-col items-center gap-4 rounded-xl border-2 border-slate-100 border-transparent bg-white p-4 shadow-lg duration-300 hover:border-blue-500 md:flex-row">
  <img src="{{ $gambar }}" class="h-40 w-full rounded-xl object-cover md:h-40 md:w-40" alt="html">
  <div class="card-body flex flex-col gap-3">
    <h1 class="font-serif text-3xl font-bold">{{ $judul }}</h1>
    <p class="line-clamp-3">{{ $slot }}</p>
  </div>
</a>
