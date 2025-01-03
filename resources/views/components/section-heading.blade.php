@props(['title' => 'Default Title', 'subtitle' => 'Default Subtitle',
        'hasBorder' => false, 'class' => ''])

<div class="{{ $hasBorder ? 'border-b border-gray-200' : '' }} pb-5 {{ $class ?? '' }}">
  <h3 class="petrona text-3xl font-black leading-6 tracking-wide text-gray-900">{{ $title }}</h3>
  <div class="flex justify-between">
    <p class="mt-2 max-w-2xl text-base text-gray-500">{{ $subtitle }}</p>
    {{ $slot }}
  </div>
</div>

{{-- <x-heading title="Job Postings" subtitle="Workcation is a property rental website. Etiam ullamcorper massa viverra consequat, consectetur id nulla tempus. Fringilla egestas justo massa purus sagittis malesuada." borderClass="border-blue-500" /> --}}
