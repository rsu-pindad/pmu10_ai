@props([
    'image' => '',
    'imageAlt' => '',
    'title' => '',
    'subTitle' => '',
    'link' => 'beranda',
])

<div class="w-full max-w-sm rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800">
  <div class="flex flex-col items-center pb-10">
    <img class="mb-3 h-24 w-24 rounded-full shadow-lg"
         src="{{ $image }}"
         alt="{{ $imageAlt }}" />
    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $title }}</h5>
    <span class="text-sm text-gray-500 dark:text-gray-400">{{ $subTitle }}</span>
    <div class="mt-4 flex md:mt-6">
      <a href="{{ route("$link") }}"
         class="inline-flex items-center rounded-lg bg-blue-700 px-4 py-2 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Kunjungi
      </a>
    </div>
  </div>
</div>
