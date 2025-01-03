@props(['items', 'position' => 'left-1/2 top-6', 'hasRarr' => true, 'width' => 'w-56',
        'hasDarr' => true])

<div class="flyout relative flex items-center">
  <button
      type="button" class="h-full inline-flex items-center gap-x-1 text-base font-normal leading-6
  text-gray-700 flyout-trigger group hover:text-brand-700" aria-expanded="false">
    <span>{{ $slot }}</span>

    @if($hasDarr)
      <svg
          class="h-5 w-5 group-hover:fill-brand group-hover:translate-y-[3px]
    transition duration-200" viewBox="0 0 20 20"
          fill="currentColor"
          aria-hidden="true">
        <path
            fill-rule="evenodd"
            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
            clip-rule="evenodd" />
      </svg>
    @endif
  </button>

  <div
      class="flyout-content absolute {{ $position }} z-10 mt-5 w-screen max-w-min -translate-x-1/2
              px-4 invisible transition-all ease-out duration-300 opacity-0 translate-y-3">
    <div
        class="{{ $width }} shrink rounded-xl bg-white text-sm font-normal leading-6 text-gray-700
                shadow-lg ring-1 ring-gray-900/5 overflow-hidden">
      @foreach($items as $item)
        @if(isset($item['method']) && strtoupper($item['method']) !== 'GET')
          <form
              action="{{ $item['url'] }}" method="{{ $item['method'] }}"
              class="group flex justify-between py-2 px-6 hover:bg-gray-50">
            @csrf
            <button type="submit" class="inline-flex justify-between text-left w-full">
              <span class="{{ $item['style'] ?? '' }}">{{ $item['name'] }}</span>
              @if($hasRarr)
                <span class="hidden group-hover:inline-block scale-125">&rarr;</span>
              @endif
            </button>
          </form>
        @else
          <a
              href="{{ $item['url'] }}"
              class="group flex justify-between py-2 px-6 hover:bg-gray-50">
            <span class="{{ $item['style'] ?? '' }}">{{ $item['name'] }}</span>
            @if($hasRarr)
              <span class="hidden group-hover:inline-block scale-125">&rarr;</span>
            @endif
          </a>
        @endif
      @endforeach
    </div>
  </div>
</div>
