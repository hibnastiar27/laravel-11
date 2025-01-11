<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button"
  class="ms-3 mt-2 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 sm:hidden">
  <span class="sr-only">Open sidebar</span>
  <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path clip-rule="evenodd" fill-rule="evenodd"
      d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
    </path>
  </svg>
</button>
<aside id="logo-sidebar"
  class="fixed left-0 top-0 z-40 h-screen w-64 -translate-x-full transition-transform sm:translate-x-0"
  aria-label="Sidebar">
  <div class="flex h-full flex-col justify-between overflow-y-auto bg-gray-50 px-3 py-4 dark:bg-gray-800">
    <div class="flex h-full flex-col gap-2">
      <a href="#" class="flex items-center gap-2 ps-2.5">
        <div class="circle rounded-full bg-green-500 p-2">
          <svg class="h-6 w-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m8 8-4 4 4 4m8 0 4-4-4-4m-2-3-4 14" />
          </svg>
        </div>
        <span
          class="self-center whitespace-nowrap text-xl font-semibold text-green-500 dark:text-green-500">Arialog</span>
      </a>

      <div class="my-2 space-y-2 font-medium">
        <a href="{{ route('dashboard') }}"
          class="group flex items-center rounded-lg border border-green-300 bg-green-100 p-2 font-bold text-green-500 duration-300 hover:border-green-600 hover:bg-green-200 hover:text-green-600 dark:text-white dark:hover:bg-gray-700">
          <svg
            class="h-5 w-5 text-green-500 transition duration-300 group-hover:text-green-600 dark:text-gray-400 dark:group-hover:text-white"
            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
            <path
              d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
          </svg>
          <span class="ms-3">Dashboard</span>
        </a>
        <a href="#"
          class="group flex items-center rounded-lg p-2 text-gray-900 hover:bg-green-100 dark:text-white dark:hover:bg-gray-700">
          <svg
            class="h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
            <path
              d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
          </svg>
          <span class="ms-3 flex-1 whitespace-nowrap">Kategori</span>
          <span
            class="ms-3 inline-flex items-center justify-center rounded-full bg-gray-100 px-2 text-sm font-medium text-gray-800 dark:bg-gray-700 dark:text-gray-300">Pro</span>
        </a>
        <a href="#"
          class="group flex items-center rounded-lg p-2 text-gray-900 hover:bg-green-100 dark:text-white dark:hover:bg-gray-700">
          <svg
            class="h-5 w-5 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
          </svg>
          <span class="ms-3 flex-1 whitespace-nowrap">Artikel</span>
          <span
            class="ms-3 inline-flex h-3 w-3 items-center justify-center rounded-full bg-blue-100 p-3 text-sm font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">3</span>
        </a>
      </div>
    </div>

    <div class="flex flex-col justify-between">
      <div class="flex flex-col-reverse gap-4">
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
            class="group group flex flex-row-reverse items-center rounded-lg border border-red-200 bg-red-50 p-2 font-semibold text-red-500 duration-300 hover:border-red-600 hover:shadow-xl hover:shadow-red-500/15 dark:text-white dark:hover:bg-gray-700">
            <svg
              class="dark:red-white h-6 w-6 -translate-x-2 text-red-500 duration-300 group-hover:translate-x-0 group-hover:text-red-600"
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
              viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2" />
            </svg>
            <span class="flex-1 whitespace-nowrap duration-300 group-hover:text-red-600">{{ __('Log Out') }}</span>
          </a>
        </form>

        <a href="{{ route('profile.edit') }}"
          class="z-50 flex items-center gap-4 rounded-lg border bg-gray-100 p-2 duration-300 hover:border-gray-500 hover:shadow-xl hover:shadow-gray-500/15">
          <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('img/pp.jpg') }}" alt="">
          <div class="font-medium dark:text-white">
            <div>{{ ucfirst(Auth::user()->name) }}</div>
            <div class="text-sm text-gray-500 dark:text-gray-400">Joined in
              {{ Auth::user()->created_at->format('d M Y') }}</div>
          </div>
        </a>
      </div>
    </div>
  </div>
</aside>
