@props([
    'link' => '#',
])
<div
     class="w-full rounded-lg border border-green-200 bg-white p-4 text-center shadow dark:border-green-700 dark:bg-green-800 sm:p-8">
  <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Unggah dokumen sendiri</h5>
  <p class="dark:text-white-400 mb-5 text-base text-gray-500 sm:text-lg">
    cari tahu dokumen sendiri yang diunggah.</p>
  <div class="items-center justify-center space-y-4 rtl:space-x-reverse sm:flex sm:space-x-4 sm:space-y-0">
    <a href="{{ $link }}"
       class="inline-flex w-full items-center justify-center rounded-lg bg-green-800 px-4 py-2.5 text-white hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-300 dark:bg-green-700 dark:hover:bg-green-600 dark:focus:ring-green-700 sm:w-auto">
      <svg class="text-white-800 h-6 w-6 dark:text-white"
           aria-hidden="true"
           xmlns="http://www.w3.org/2000/svg"
           width="24"
           height="24"
           fill="none"
           viewBox="0 0 24 24">
        <path stroke="currentColor"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M19 12H5m14 0-4 4m4-4-4-4" />
      </svg>
      <div class="text-left rtl:text-right">
        <div class="mb-1 text-xs">Coba AI Kami</div>
        <div class="-mt-1 font-sans text-sm font-semibold">Kunjungi</div>
      </div>
    </a>
  </div>
</div>
