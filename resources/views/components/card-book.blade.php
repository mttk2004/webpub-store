@props(['book'])

<div class="min-w-36 max-w-64 border-2 border-gray-200 p-1.5 sm:p-2 lg:p-3 rounded
            hover:shadow-lg hover:bg-gray-50 group">
  <a href="{{ route('books.show', ['book' => "$book->id"]) }}"
     class="block relative cursor-pointer">
    <div class="relative flex justify-center items-center overflow-hidden">
      <span class="min-h-36 max-h-48 aspect-[3/4] mx-auto my-auto">
        <img
            src="{{ $book->cover }}"
            alt="Front of zip and black zipper pulls."
            class="inline-block h-full w-auto object-cover object-center rounded
            group-hover:brightness-125 transition duration-500">
      </span>
    </div>
    <div class="relative mt-4">
      <h3 class="petrona text-lg font-bold leading-5 text-gray-700 line-clamp-2">
        {{ $book->title }}
      </h3>
      <p class="mt-1 text-xs text-gray-500">
        {{ $book->publisherName }}
      </p>
    </div>

    <div class="relative mt-3 text-gray-600 text-xs font-medium">
      <span>
        {{ format_publication_date($book->publication_date) }}
      </span>
      <x-dot class="translate-y-[1px]" />
      <span>{{ $book->pages }} trang</span>
      <x-dot class="translate-y-[1px]" />
      <span class="inline-flex gap-1">
        <svg
            xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24"
            fill="currentColor" class="text-yellow-500 translate-y-[1px]">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path
              d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" />
        </svg>
        <span>4.8 (12)</span>
      </span>
    </div>

    <x-divider class="my-4" />

    @if($book->hasDiscount)
      <div class="relative mt-8 petrona flex flex-col">
        <del class="text-sm font-semibold text-gray-500">
          {{ format_price($book->price) }}
        </del>
        <strong class="text-base font-black text-gray-800 leading-normal tracking-wide">
          {{ format_price($book->priceWithDiscount) }}
        </strong>
      </div>
    @else
      <div class="relative mt-8 petrona flex flex-col">
        <strong
            class="text-base font-black text-gray-800 leading-normal
      tracking-wide">{{ format_price($book->price) }}</strong>
      </div>
    @endif
  </a>

  <div class="mt-4">
    <a
        href="#" class="relative flex items-center justify-center rounded border border-brand-700
                        p-2 text-sm text-brand-700 hover:bg-brand-700 hover:text-white">
      Thêm vào giỏ<span class="sr-only">, {{ $book->title }}</span>
    </a>
  </div>
</div>
