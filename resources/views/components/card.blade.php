<div
    class="card border rounded-xl p-4 flex items-center gap-4 duration-300 hover:duration-300 hover:cursor-pointer hover:shadow-lg">
    <div class="card-header">
        <img src="{{ $gambar }}" class="w-32 rounded-xl" alt="html">
    </div>
    <div class="card-body">
        <h1 class="font-bold text-4xl">{{ $judul }}</h1>
        <p>{{ $slot }}</p>
    </div>
</div>