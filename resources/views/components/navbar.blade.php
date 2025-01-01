<nav class="flex w-full justify-between px-20 py-4 bg-slate-100">
    <h1 class="text-4xl font-bold italic text-red-500">Artikel</h1>
    <div class="flex gap-4 *:px-4 *:py-2">
        <a href="/blog" class="{{ $slug=='blog' ? 'text-red-500 font-bold' : '' }}">Blog</a>
        <a href="/kontak" class="{{ $slug=='kontak' ? 'text-red-500 font-bold' : '' }}">Contact</a>
    </div>
</nav>