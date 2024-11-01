<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body class="h-svh flex flex-col bg-gray-100">
    <x-partial.header />
    <main class="container mx-auto my-auto rounded">
      {{ $slot }}
    </main>
    <x-partial.footer />
  </body>

</html>
