<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @else
  <link rel="stylesheet" href="css/style.css"> {{-- public/css/ --}}
  @endif
</head>

<body>
  {{-- NAVBAR --}}
  <nav class="flex w-full justify-between p-4">
    <h1 class="text-4xl font-bold italic">Artikel</h1>
    <div class="flex gap-4 *:px-4 *:py-2">
      <a class="{{ request()->is('/blog') ? 'text-red-500' : '' }}" href="/blog">Blog</a>
      <a href="/about">About</a>
      <a href="/contact">Contact</a>
    </div>
  </nav>

  {{-- CONTENT --}}
  <h1>About</h1>

  {{-- FOOTER --}}
  <script src="js/script.js"></script>
</body>

</html>