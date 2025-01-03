<div>
  <label for="{{ $id }}" class="block text-sm font-medium leading-6 text-gray-700">
    {{ $label }}
  </label>
  <div class="mt-2">
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $id }}" class="block w-full rounded-md
    border-0 py-1.5 text-gray-600 shadow-sm ring-1 ring-inset ring-gray-400
    placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-accent-600 sm:text-sm
    sm:leading-6 font-normal" placeholder="{{ $placeholder }}">
  </div>
</div>
