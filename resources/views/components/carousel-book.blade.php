@props(['books'])

<x-carousel>
  @foreach($books as $book)
    <div class="inline-block absolute w-48 sm:w-52 md:w-56 h-[29.4rem]">
      <x-card-book :book="$book"/>
    </div>
  @endforeach
</x-carousel>
