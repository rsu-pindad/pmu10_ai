<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body>
    <div class="flex min-h-screen flex-col">
      <div class='flex items-center justify-between bg-blue-700 px-8 py-2 text-white shadow-sm'>
        App Bar
      </div>
      <div class='relative flex flex-grow'>
        <main class='flex-1 bg-gray-100 py-2'>
          {{ $slot }}
        </main>
      </div>
    </div>
  </body>

</html>
