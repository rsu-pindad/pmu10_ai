<?php

use function Livewire\Volt\{state};

//

?>

<div class="mx-auto px-4 text-center md:max-w-screen-md lg:max-w-screen-lg lg:px-36">
  <span class="font-semibold uppercase text-gray-400">PELAYANAN KESEHATAN KAMI</span>
  <div class="mt-8 flex flex-wrap items-center justify-center text-gray-500 sm:justify-between">

    <div class="grid grid-cols-2 gap-5">
      <div
           class="max-h-svh max-w-sm rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800">
        <a href="https://rsupindad.com/">
          <img class="h-40 w-96 rounded-t-lg object-fill"
               src="{{ Storage::disk('public')->url('img/bandung.png') }}"
               alt="rsupindad" />
        </a>
        <div class="p-5">
          <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
              RSU Pindad Bandung</h5>
          </a>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            RSU Pindad Memberikan Layanan Kesehatan Untuk Anda dan Keluarga.
          </p>
          <a href="https://rsupindad.com/"
             class="inline-flex items-center rounded-lg bg-blue-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Kunjungi
            <svg class="ms-2 h-3.5 w-3.5 rtl:rotate-180"
                 aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg"
                 fill="none"
                 viewBox="0 0 14 10">
              <path stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
          </a>
        </div>
      </div>
      <div
           class="max-h-svh max-w-sm rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800">
        <a href="#">
          <img class="h-40 w-96 rounded-t-lg object-fill"
               src="{{ Storage::disk('public')->url('img/rs-baru.webp') }}"
               alt="rsuturen" />
        </a>
        <div class="p-5">
          <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
              RSU Pindad Turen
            </h5>
          </a>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            RSU Pindad Memberikan Layanan Kesehatan Untuk Anda dan Keluarga.
          </p>
          <a href="#"
             class="inline-flex items-center rounded-lg bg-blue-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Kunjungi
            <svg class="ms-2 h-3.5 w-3.5 rtl:rotate-180"
                 aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg"
                 fill="none"
                 viewBox="0 0 14 10">
              <path stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
          </a>
        </div>
      </div>
      <div class="max-w-sm rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800">
        <a href="#">
          <img class="h-40 w-96 rounded-t-lg object-fill"
               src="{{ Storage::disk('public')->url('img/pratama.png') }}"
               alt="pratama-pindad" />
        </a>
        <div class="p-5">
          <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
              Klinik Pratama Pindad
            </h5>
          </a>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            Klinik Pratama Pindad Memberikan Layanan Kesehatan Untuk Anda dan Keluarga.
          </p>
        </div>
      </div>
      <div class="max-w-sm rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800">
        <a href="#">
          <img class="h-40 w-96 rounded-t-lg object-fill"
               src="{{ Storage::disk('public')->url('img/cakra.png') }}"
               alt="cakra-husada" />
        </a>
        <div class="p-5">
          <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
              Klinik Cakra Husada
            </h5>
          </a>
          <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            Klinik Cakra Husada Memberikan Layanan Kesehatan Untuk Anda dan Keluarga.
          </p>
        </div>
      </div>
    </div>

    {{-- <a href="https://logowik.com/kementerian-kesehatan-logo-vector-41355.html">
          <img src="https://logowik.com/content/uploads/images/kementerian-kesehatan7474.logowik.com.webp">
        </a> --}}

  </div>
</div>
