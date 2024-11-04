@props([
    'type' => 'default',
    'message' => 'default',
    'title' => 'alert',
    'link' => '',
])
@switch($type)
  @case('danger')
    <div class="mb-4 flex items-center rounded-lg bg-red-50 p-4 text-sm text-red-800 dark:bg-gray-800 dark:text-red-400"
         role="alert">
      <svg class="me-3 inline h-4 w-4 flex-shrink-0"
           aria-hidden="true"
           xmlns="http://www.w3.org/2000/svg"
           fill="currentColor"
           viewBox="0 0 20 20">
        <path
              d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
      </svg>
      <span class="sr-only">Info</span>
      <div>
        <span class="font-medium">{{ $title }}</span> {{ $message }}. {{ $link }}
      </div>
    </div>
  @break

  @case('success')
    <div class="mb-4 flex items-center rounded-lg bg-green-50 p-4 text-sm text-green-800 dark:bg-gray-800 dark:text-green-400"
         role="alert">
      <svg class="me-3 inline h-4 w-4 flex-shrink-0"
           aria-hidden="true"
           xmlns="http://www.w3.org/2000/svg"
           fill="currentColor"
           viewBox="0 0 20 20">
        <path
              d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
      </svg>
      <span class="sr-only">Info</span>
      <div>
        <span class="font-medium">{{ $title }}</span> {{ $message }}. {{ $link }}
      </div>
    </div>
  @break

  @case('warning')
    <div class="mb-4 flex items-center rounded-lg bg-yellow-50 p-4 text-sm text-yellow-800 dark:bg-gray-800 dark:text-yellow-300"
         role="alert">
      <svg class="me-3 inline h-4 w-4 flex-shrink-0"
           aria-hidden="true"
           xmlns="http://www.w3.org/2000/svg"
           fill="currentColor"
           viewBox="0 0 20 20">
        <path
              d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
      </svg>
      <span class="sr-only">Info</span>
      <div>
        <span class="font-medium">{{ $title }}</span> {{ $message }}. {{ $link }}
      </div>
    </div>
  @break

  @case('info')
    <div class="mb-4 flex items-center rounded-lg bg-blue-50 p-4 text-sm text-blue-800 dark:bg-gray-800 dark:text-blue-400"
         role="alert">
      <svg class="me-3 inline h-4 w-4 flex-shrink-0"
           aria-hidden="true"
           xmlns="http://www.w3.org/2000/svg"
           fill="currentColor"
           viewBox="0 0 20 20">
        <path
              d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
      </svg>
      <span class="sr-only">Info</span>
      <div>
        <span class="font-medium">{{ $title }}</span> {{ $message }}. {{ $link }}
      </div>
    </div>
  @break

  @default
    <div class="flex items-center rounded-lg bg-gray-50 p-4 text-sm text-gray-800 dark:bg-gray-800 dark:text-gray-300"
         role="alert">
      <svg class="me-3 inline h-4 w-4 flex-shrink-0"
           aria-hidden="true"
           xmlns="http://www.w3.org/2000/svg"
           fill="currentColor"
           viewBox="0 0 20 20">
        <path
              d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
      </svg>
      <span class="sr-only">Info</span>
      <div>
        <span class="font-medium">{{ $title }}</span> {{ $message }}. {{ $link }}
      </div>
    </div>
@endswitch
