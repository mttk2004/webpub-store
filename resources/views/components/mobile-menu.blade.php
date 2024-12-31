<div
    class="lg:hidden"
    role="dialog"
    aria-modal="true">
  <!-- Background backdrop, show/hide based on slide-over state. -->
  <div
      class="fixed inset-0 z-[1] helper-bg transition-all ease-in-out duration-300
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
              href="#" class="-mx-3 block rounded-lg px-3 py-2 text-sm leading-7
            text-gray-700 hover:bg-gray-50">Product</a>
          <a
              href="#" class="-mx-3 block rounded-lg px-3 py-2 text-sm leading-7
            text-gray-700 hover:bg-gray-50">Features</a>
          <a
              href="#" class="-mx-3 block rounded-lg px-3 py-2 text-sm leading-7
            text-gray-700 hover:bg-gray-50">Marketplace</a>
          <a
              href="#" class="-mx-3 block rounded-lg px-3 py-2 text-sm leading-7
            text-gray-700 hover:bg-gray-50">Company</a>
        </div>
        <div class="py-6">
          <a
              href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-sm leading-7
            text-gray-700 hover:bg-gray-50">Đăng nhập</a>
        </div>
      </div>
    </div>
  </div>
</div>
