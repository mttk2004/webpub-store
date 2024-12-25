<div
    class="modal-search relative z-10 invisible" aria-labelledby="modal-title" role="dialog"
    aria-modal="true">
  <div id="modal-bg" class="fixed inset-0 z-10 bg-gray-300/75 w-screen overflow-y-auto
  ease-out duration-300 transition-all opacity-0 backdrop-blur-0">
    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center
    sm:p-0">
      <div id="modal-panel"
          class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl
          transition-all duration-300 ease-in-out sm:my-8 sm:w-full sm:max-w-lg translate-y-8
          scale-75 opacity-0">
        <div class="bg-white px-4 pb-4 sm:px-6 sm:pb-4">
          <form action="/search" method="POST" class="space-y-6">
            @csrf
            <x-input-with-label
                label="Tìm kiếm" id="search" name="search" type="search"
                placeholder="Tên sách, nhà xuất bản hoặc tác giả bạn muốn" />
            <x-select-menu
                label="Ngôn ngữ (tùy chọn)"
                id="your-id"
                name="your-name"
                :options="[
                    ['value' => 'option1', 'label' => 'Option 1', 'selected' => false],
                    ['value' => 'option2', 'label' => 'Option 2', 'selected' => true],
                    ['value' => 'option3', 'label' => 'Option 3', 'selected' => false]
                ]"
            />
            <x-select-menu
                label="Công cụ (tùy chọn)"
                id="your-id"
                name="your-name"
                :options="[
                    ['value' => 'option1', 'label' => 'Option 1', 'selected' => false],
                    ['value' => 'option2', 'label' => 'Option 2', 'selected' => true],
                    ['value' => 'option3', 'label' => 'Option 3', 'selected' => false]
                ]"
            />
            <x-select-menu
                label="Sắp xếp (tùy chọn)"
                id="your-id"
                name="your-name"
                :options="[
                    ['value' => 'option1', 'label' => 'Option 1', 'selected' => false],
                    ['value' => 'option2', 'label' => 'Option 2', 'selected' => true],
                    ['value' => 'option3', 'label' => 'Option 3', 'selected' => false],
                ]"
            />
            <div class="sm:flex sm:flex-row-reverse">
              <button
                  type="submit"
                  class="inline-flex w-full justify-center rounded-md bg-accent-600 px-3 py-2 text-sm
                        text-white shadow-sm hover:bg-accent-500 sm:ml-3 sm:w-auto">
                Tìm kiếm
              </button>
              <button
                  type="button"
                  id="modal-search-close"
                  class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm
                   text-gray-700 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">
                Hủy
              </button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>
