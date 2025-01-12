@extends('layouts.app')

@section('title', 'Manage Kategori')

@section('content')
  <section>
    {{-- <div class="header flex justify-between">
      <h1 class="text-2xl font-bold">Manage </h1>
      <a href="" class="rounded-lg bg-green-500 p-2 text-white duration-300 hover:bg-green-600">Tambah
      </a>
    </div> --}}
    <x-AdminHeader>Kategori</x-AdminHeader>

    <div class="tabel mt-4">
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-left text-base text-gray-500 dark:text-gray-400 rtl:text-right">
          <thead class="bg-green-500 text-xs uppercase text-white dark:bg-gray-700 dark:text-gray-400">
            <tr>
              <th scope="col" class="p-6">
                No
              </th>
              <th scope="col" class="p-6">
                Kategori
              </th>
              <th scope="col" class="p-6 text-center">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
              <td class="px-6 py-4">
                1
              </td>
              <td class="px-6 py-4">
                Laptop
              </td>
              <td class="flex items-center justify-center gap-4 px-6 py-4 text-sm text-white">
                <a href="#"
                  class="flex items-center rounded-lg bg-orange-500 p-2 font-medium duration-300 hover:bg-orange-600">
                  <svg class="h-6 w-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                  </svg>
                  Edit
                </a>

                <a href="#"
                  class="flex items-center rounded-lg bg-red-500 p-2 font-medium duration-300 hover:bg-red-600">
                  <svg class="h-6 w-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                  </svg>
                  Hapus
                </a>
              </td>
            </tr>
          </tbody>
        </table>
        <nav class="flex-column flex flex-wrap items-center justify-between p-4 md:flex-row"
          aria-label="Table navigation">
          <span
            class="mb-4 block w-full text-sm font-normal text-gray-500 dark:text-gray-400 md:mb-0 md:inline md:w-auto">Showing
            <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span
              class="font-semibold text-gray-900 dark:text-white">1000</span></span>
          <ul class="inline-flex h-8 -space-x-px text-sm rtl:space-x-reverse">
            <li>
              <a href="#"
                class="ms-0 flex h-8 items-center justify-center rounded-s-lg border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
            </li>
            <li>
              <a href="#"
                class="flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
            </li>
            <li>
              <a href="#"
                class="flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
            </li>
            <li>
              <a href="#" aria-current="page"
                class="flex h-8 items-center justify-center border border-gray-300 bg-green-50 px-3 text-green-600 hover:bg-green-100 hover:text-green-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
            </li>
            <li>
              <a href="#"
                class="flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
            </li>
            <li>
              <a href="#"
                class="flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
            </li>
            <li>
              <a href="#"
                class="flex h-8 items-center justify-center rounded-e-lg border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

    <x-AdminTable :columns="$columns" :rows="$kategori" />

  </section>
@endsection
