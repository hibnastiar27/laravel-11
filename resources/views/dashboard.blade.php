<x-app-layout>
  <x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
      {{-- <div class="overflow-hidden bg-white p-4 shadow-sm sm:rounded-lg"> --}}
      <div class="flex justify-center gap-12 *:rounded-2xl *:bg-white *:p-10 *:shadow-lg">
        <div class="total-user">
          <h1 class="pb-1 text-4xl font-bold">10k</h1>
          <p class="text-blue-500">Total Student</p>
        </div>
        <div class="total-artikel">
          <h1 class="pb-1 text-4xl font-bold">24k</h1>
          <p class="text-emerald-500">Total Artikel</p>
        </div>
        <div class="total-kelas">
          <h1 class="pb-1 text-4xl font-bold">240</h1>
          <p class="text-sky-500">Total Kelas</p>
        </div>
      </div>
    </div>
    {{-- </div> --}}
  </div>
</x-app-layout>
