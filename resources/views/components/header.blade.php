<header class="bg-white">
  <nav class="flex items-center justify-between gap-12 px-6 py-4 lg:px-8" aria-label="Global">
    <div class="flex">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only">Webpub</span>
        <img
            class="h-6 lg:h-8 w-auto" src="{{ Vite::asset('resources/images/webpub.webp') }}"
            alt="webpub logo">
      </a>
    </div>
    <div class="flex lg:hidden">
      <button
          type="button" class="mobile-menu-open -m-2.5 inline-flex items-center justify-center
      rounded-md p-2.5 text-gray-700">
        <span class="sr-only">Open main menu</span>
        <svg
            class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            aria-hidden="true">
          <path
              stroke-linecap="round" stroke-linejoin="round"
              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-8 items-center">
      <x-flyout-menu
          :title="'Ngôn ngữ'" :items="[
          ['name' => 'Java', 'url' => '#'],
          ['name' => 'C#', 'url' => '#'],
          ['name' => 'PHP', 'url' => '#'],
          ['name' => 'JavaScript', 'url' => '#'],
          ['name' => 'TypeScript', 'url' => '#'],
          ['name' => 'HTML', 'url' => '#'],
          ['name' => 'CSS', 'url' => '#'],
          ['name' => 'Go', 'url' => '#'],
          ['name' => 'Ruby', 'url' => '#'],
      ]" />
      <x-flyout-menu
          :title="'Công nghệ'" :items="[
          ['name' => 'React', 'url' => '#'],
          ['name' => 'Vue', 'url' => '#'],
          ['name' => 'Angular', 'url' => '#'],
          ['name' => 'ASP.NET', 'url' => '#'],
          ['name' => 'Spring', 'url' => '#'],
          ['name' => 'Laravel', 'url' => '#'],
      ]" />
      <a
          href="#" class="text-base font-medium leading-6 text-gray-900
      hover:text-brand-700">Về chúng tôi</a>
    </div>

    <div class="hidden lg:flex items-center">
      <div class="relative rounded-md shadow-sm">
        <input
            id="modal-search-open"
            type="text"
            class="inline-block w-48 rounded-md border-0 py-1 pr-10 text-gray-900 ring-1
            ring-inset
            ring-gray-400 placeholder:text-gray-500 focus:ring-2 focus:ring-inset
            focus:ring-brand-700 sm:text-sm sm:leading-6"
            placeholder="Tìm sách... (Alt + K)">
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center pr-3">
          <svg
              xmlns="http://www.w3.org/2000/svg" width="20" height="20"
              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
              stroke-linecap="round" stroke-linejoin="round" class="text-gray-500">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path
                d="M10 10m-7 0a7 7 0 1 0 14
            0a7 7 0 1 0 -14 0" />
            <path d="M21 21l-6 -6" />
          </svg>
        </div>
      </div>
      <x-modal-search />
    </div>

    @auth
      <div class="hidden lg:flex lg:gap-x-8 items-center">
        <div class="relative group cursor-pointer">
          <span class="inline-flex justify-center items-center absolute -top-2.5 -right-3 h-5 w-6
          bg-brand-700 rounded-full text-white text-sm font-bold group-hover:bg-brand-500">
            <span class="-translate-y-[1px]">12</span>
          </span>

          <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                stroke-linejoin="round" class="text-gray-800 group-hover:text-gray-600">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
            <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
            <path d="M17 17h-11v-14h-2" /><path d="M6 5l14 1l-1 7h-13" />
          </svg>
        </div>

        <x-flyout-menu
            :title="auth()->user()->first_name" :items="[
              ['name' => 'Thông tin cá nhân', 'url' => '#'],
              ['name' => 'Đổi mật khẩu', 'url' => '#'],
              ['name' => 'Đăng xuất', 'url' => route('logout'), 'method' => 'POST'],
            ]" :position="'-left-6 top-6'" :hasRarr="false" :width="'w-44'" />
      </div>
    @else
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a
            href="{{ route('login') }}"
            class="hover:text-brand-700 text-base font-medium leading-6 text-gray-900">
          Đăng nhập
          <span aria-hidden="true">&rarr;</span>
        </a>
      </div>
    @endauth
  </nav>
  <!-- Mobile menu, show/hide based on menu open state. -->
  <div
      class="lg:hidden"
      role="dialog"
      aria-modal="true">
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <div class="fixed inset-0 z-[1] helper-bg transition-all ease-in-out duration-300
    invisible backdrop-blur-0"></div>
    <div
        class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto px-6 py-6
    sm:max-w-sm sm:ring-1 sm:ring-gray-900/10 mobile-menu bg-white translate-x-[700px]
    transition-all ease-in-out duration-300">
      <div class="flex items-center justify-between">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Webpub</span>
          <img
              class="h-8 w-auto"
              src="{{ Vite::asset('resources/images/webpub.webp') }}" alt="webpub logo">
        </a>
        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700 mobile-menu-close">
          <span class="sr-only">Close menu</span>
          <svg
              class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="mt-6 flow-root">
        <div class="-my-6 divide-y divide-gray-500/10">
          <div class="space-y-1 py-6">
            <a
                href="#" class="-mx-3 block rounded-lg px-3 py-2 text-sm font-medium leading-7
            text-gray-900 hover:bg-gray-50">Product</a>
            <a
                href="#" class="-mx-3 block rounded-lg px-3 py-2 text-sm font-medium leading-7
            text-gray-900 hover:bg-gray-50">Features</a>
            <a
                href="#" class="-mx-3 block rounded-lg px-3 py-2 text-sm font-medium leading-7
            text-gray-900 hover:bg-gray-50">Marketplace</a>
            <a
                href="#" class="-mx-3 block rounded-lg px-3 py-2 text-sm font-medium leading-7
            text-gray-900 hover:bg-gray-50">Company</a>
          </div>
          <div class="py-6">
            <a
                href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-sm font-medium leading-7
            text-gray-900 hover:bg-gray-50">Đăng nhập</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
