<div>
  <label for="{{ $id }}" class="block text-sm font-medium leading-6 text-gray-700">
    {{ $label }}
  </label>
  <select
      id="{{ $id }}" name="{{ $name }}"
      class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-700 ring-1
      ring-inset ring-gray-300 focus:ring-2 focus:ring-accent-600 sm:text-sm sm:leading-6">
    @foreach($options as $option)
      <option class="font-bold"
          value="{{ $option['value'] }}" {{ $option['selected'] ? 'selected' : '' }}>
        {{ $option['label'] }}
      </option>
    @endforeach
  </select>
</div>
