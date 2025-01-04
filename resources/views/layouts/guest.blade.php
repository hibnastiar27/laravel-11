<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
      @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
      <link rel="stylesheet" href="css/style.css"> {{-- public/css/ --}}
    @endif
  </head>

  <body>
    {{-- NAVBAR --}}
    <x-navbar :slug="$slug" />

    {{-- CONTENT --}}
    <main class="min-h-screen">
      @yield('content')
    </main>

    {{-- FOOTER --}}
    <x-footer />

    <script src="js/script.js"></script>
  </body>

</html>
