<div class="tabel mt-4">
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

    <div class="overflow-hidden rounded-lg">
      <table class="w-full text-left text-base text-gray-500 rtl:text-right">
        <thead class="bg-gray-200 text-sm uppercase text-black dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th scope="col" class="w-7 p-6 text-center">No</th>
            @foreach ($columns as $column)
              <th scope="col" class="p-6">{{ $column }}</th>
            @endforeach
            <th scope="col" class="w-1/6 p-6 text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          @if ($rows)
            @foreach ($rows['data'] as $row)
              <tr
                class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                <td class="px-6 py-4 text-center text-black">
                  {{ ($kategori->currentPage() - 1) * $kategori->perPage() + $loop->iteration }}</td>
                <td class="px-6 py-4">{{ $row['name'] }}</td>
                <td class="flex items-center justify-center gap-4 px-6 py-4 text-white">
                  {{-- Tombol Edit --}}
                  <a href="{{ route('admin.' . $route . '.edit', $row['id']) }}" class="">
                    <svg class="h-6 w-6 text-gray-500 dark:text-white" aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                      viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                    </svg>
                  </a>

                  {{-- Tombol Hapus --}}
                  <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="" type="button">
                    <svg class="h-6 w-6 text-gray-500 dark:text-white" aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                      viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                    </svg>
                  </button>
                  <div id="popup-modal" tabindex="-1"
                    class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden bg-black/50 md:inset-0">
                    <div class="relative max-h-full w-full max-w-md p-4">
                      <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                        <button type="button"
                          class="absolute end-2.5 top-3 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                          data-modal-hide="popup-modal">
                          <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                          </svg>
                          <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 text-center md:p-5">
                          <svg class="mx-auto mb-4 h-12 w-12 text-gray-400 dark:text-gray-200" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                          </svg>
                          <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to
                            delete this item?</h3>
                          <div class="flex items-center justify-evenly">
                            <form action="{{ route('admin.' . $route . '.destroy', $row['id']) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button data-modal-hide="popup-modal" type="submit"
                                class="inline-flex items-center rounded-lg bg-red-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800">
                                Yes, I'm sure
                              </button>
                            </form>
                            <button data-modal-hide="popup-modal" type="button"
                              class="ms-3 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-green-700 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">No,
                              cancel</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            @endforeach
          @else
            <tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
              <td colspan="3" class="p-6">
                <div class="flex flex-col items-center">
                  <div class="mb-3 rounded-full bg-green-500 p-3">
                    <svg class="h-10 w-10 text-white dark:text-white" aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                      viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                  </div>
                  <h1 class="text-center text-xl font-bold">Ops, tidak ada data nihh</h1>
                  <p class="text-center text-base">Tambahkan Data Terlebih Dahulu Yuk</p>
                </div>
              </td>
            </tr>
          @endif
        </tbody>
      </table>
    </div>

    {{-- Pagination --}}
    <nav class="flex-column flex items-center justify-between p-4 md:flex-row" aria-label="Table navigation">
      <span class="mb-4 block w-full font-normal text-gray-500 dark:text-gray-400 md:mb-0 md:inline md:w-auto">Showing
        <span class="font-semibold text-gray-900 dark:text-white">
          {{ $kategori->firstItem() }} to {{ $kategori->lastItem() }}
        </span> of
        <span class="font-semibold text-gray-900 dark:text-white">{{ $kategori->total() }}</span>
      </span>

      <div class="flex h-fit items-center">
        @if ($kategori->onFirstPage())
          <span
            class="disabled w-14text-gray-500 flex h-14 select-none items-center rounded-s-lg border bg-gray-200 px-4">Previous</span>
        @else
          <a href="{{ $kategori->previousPageUrl() }}"
            class="flex h-14 items-center rounded-s-lg border border-gray-300 bg-white px-4 duration-300 hover:bg-gray-100">Previous</a>
        @endif

        @for ($i = 1; $i <= $kategori->lastPage(); $i++)
          @if ($i == $kategori->currentPage())
            <span
              class="p flex h-14 w-14 items-center justify-center border border-green-300 bg-green-500 font-bold text-white duration-300 hover:bg-green-600">{{ $i }}</span>
          @else
            <a href="{{ $kategori->url($i) }}"
              class="p bg-whit flex h-14 w-14 items-center justify-center border border-gray-300 bg-white duration-300 hover:bg-gray-100">{{ $i }}</a>
          @endif
        @endfor



        @if ($kategori->hasMorePages())
          <a href="{{ $kategori->nextPageUrl() }}"
            class="flex h-14 items-center rounded-e-lg border border-gray-300 bg-white px-4 duration-300 hover:bg-gray-100">Next</a>
        @else
          <span class="disabled flex h-14 select-none items-center rounded-e-lg border bg-gray-200 px-4 text-gray-500">
            Next
          </span>
        @endif
      </div>
    </nav>
  </div>
</div>
