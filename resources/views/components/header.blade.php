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
      <a href="#" class="text-base leading-6 text-gray-700
      hover:text-brand-700">Trang chủ</a>
      <x-flyout-menu
          :items="$languageItems">
        Ngôn ngữ
      </x-flyout-menu>
      <x-flyout-menu
          :items="$toolItems">
        Công nghệ
      </x-flyout-menu>
      <a href="#" class="text-base leading-6 text-gray-700
      hover:text-brand-700">Bán chạy nhất</a>
    </div>

    <div class="hidden lg:flex items-center">
      <div class="relative rounded-md shadow-sm">
        <input
            id="modal-search-open"
            type="text"
            class="inline-block w-48 rounded-md border-0 py-1 pr-10 text-gray-700 ring-1
            ring-inset
            ring-gray-400 placeholder:text-gray-500 focus:ring-2 focus:ring-inset
            focus:ring-brand-700 sm:text-sm sm:leading-6"
            placeholder="Tìm mọi thứ (Alt + K)">
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
        <x-cart-button />

        <x-flyout-menu
            :items="[
              ['name' => 'Thông tin cá nhân', 'url' => '#'],
              ['name' => 'Đơn hàng của tôi', 'url' => '#'],
              ['name' => 'Địa chỉ nhận hàng', 'url' => '#'],
              ['name' => 'Đổi avatar', 'url' => '#'],
              ['name' => 'Đổi mật khẩu', 'url' => '#'],
              ['name' => 'Đăng xuất', 'url' => route('logout'), 'method' => 'POST',
                'style' => 'text-brand-700'
              ],
            ]" :position="'-left-10 top-6'" :hasRarr="false" :width="'w-44'" :hasDarr="false">
          <x-avatar alt="{{ auth()->user()->first_name }}'s Avatar" src="{{auth()->user()
          ->avatar}}" />
        </x-flyout-menu>
      </div>
    @else
      <x-login-button />
    @endauth
  </nav>
  <!-- Mobile menu, show/hide based on menu open state. -->
  <x-mobile-menu />
</header>
