@props(['class' => '', 'gap' => 4, 'loop' => false, 'height' => 64])

<div class="carousel relative w-full flex justify-center items-center">
  <div class="relative overflow-hidden w-9/12 sm:w-10/12 md:w-11/12 {{ $class }}">
    <div
        class="carousel-inner h-[29.4rem] transition-transform duration-500 ease-in-out"
        style="gap: {{ $gap }}px;">
      {{ $slot }}
    </div>
  </div>

  <button
      class="carousel-prev z-10 absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800
  text-white inline-flex justify-center items-center rounded h-8 w-8 font-bold">
    <svg
        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left">
      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
      <path d="M15 6l-6 6l6 6" />
    </svg>
  </button>
  <button
      class="carousel-next absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800
  text-white inline-flex justify-center items-center rounded h-8 w-8 font-bold">
    <svg
        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-right">
      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
      <path d="M9 6l6 6l-6 6" />
    </svg>
  </button>
</div>
