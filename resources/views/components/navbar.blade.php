@if (Route::has('login'))
  <nav class="flex w-full justify-between bg-slate-100 p-4 md:px-20">
    <h1 class="bg-gradient-to-r from-blue-900 to-blue-500 bg-clip-text pb-1 text-4xl font-bold italic text-transparent">
      <a href="{{ url('/blog') }}">
        AriaLog
      </a>
    </h1>
    <div class="flex gap-4 *:p-2">
      <a href="{{ route('blog') }}" class="{{ request()->routeIs('blog') ? 'text-blue-500 font-bold' : '' }}">Blog</a>
      <a href="{{ route('kelas') }}" class="{{ request()->routeIs('kelas') ? 'text-blue-500 font-bold' : '' }}">Kelas</a>
      <a href="{{ route('kontak') }}"
        class="{{ request()->routeIs('kontak') ? 'text-blue-500 font-bold' : '' }}">Contact</a>
      @auth
        <a href="{{ url('/dashboard') }}"
          class="{{ request()->routeIs('dashboard') ? 'text-blue-500 font-bold' : '' }}">Dashboard
          <span class="text-blue-500">({{ Auth::user()->name }})</span>
        </a>
      @else
        <a href="{{ route('login') }}" class="{{ request()->routeIs('dashboard') ? 'text-blue-500 font-bold' : '' }}">
          Log in
        </a>

        @if (Route::has('register'))
          <a href="{{ route('register') }}"
            class="{{ request()->routeIs('dashboard') ? 'text-blue-500 font-bold' : '' }}">
            Register
          </a>
        @endif)
      @endauth
    </div>
  </nav>
@endif
