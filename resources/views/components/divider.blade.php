@props(['text' => 'Continue', 'textClass' => 'text-sm text-gray-500',
        'borderClass' => 'border-gray-300', 'withText' => false, 'class' => ''])

<div class="relative {{ $class }}">
  <div class="absolute inset-0 flex items-center" aria-hidden="true">
    <div class="w-full border-t {{ $borderClass }}"></div>
  </div>
  @if ($withText)
    <div class="relative flex justify-center">
      <span class="bg-white px-2 {{ $textClass }}">{{ $text }}</span>
    </div>
  @endif
</div>

{{-- <x-divider :withText="true" text="Or Sign In" textClass="text-lg text-blue-500"
borderClass="border-blue-500" /> --}}
