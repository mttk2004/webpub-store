<x-layout>
  <x-container class="py-12">
    <x-section-heading
        title="Có gì mới?"
        subtitle="Bản phát hành mới nhất của chúng tôi trong vài tháng qua."
    />

    <x-list-book />
  </x-container>

  <x-container class="py-12 mb-8">
    <x-section-heading
        title="Độc giả yêu thích"
        subtitle="Các sản phẩm phát triển web được khách hàng đánh giá cao nhất của chúng tôi."
    />

    <x-list-book />
  </x-container>

  <section aria-labelledby="perks-heading" class="border-t border-gray-200 bg-gray-50">
    <h2 id="perks-heading" class="sr-only">Đặc quyền của bạn</h2>

    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8 space-y-12">
      <x-section-heading title="Đặc quyền của bạn"
                         subtitle="Những lợi ích mà bạn sẽ nhận được khi mua hàng tại chúng tôi." />
      <div
          class="grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 lg:gap-x-8 lg:gap-y-0">
        <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
          <div class="md:flex-shrink-0">
            <div class="flow-root">
              <img
                  class="-my-1 mx-auto h-24 w-auto"
                  src="https://tailwindui.com/plus/img/ecommerce/icons/icon-returns-light.svg"
                  alt="">
            </div>
          </div>
          <div class="mt-6 md:ml-4 md:mt-0 lg:ml-0 lg:mt-6">
            <h3 class="text-base font-medium text-gray-800 md:text-lg">Trả hàng miễn phí</h3>
            <p class="mt-3 text-sm text-gray-500">
              Không phải những gì bạn mong đợi? Đặt nó trở lại trong bưu kiện và đính kèm con tem
              bưu phí trả trước.
            </p>
          </div>
        </div>
        <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
          <div class="md:flex-shrink-0">
            <div class="flow-root">
              <img
                  class="-my-1 mx-auto h-24 w-auto"
                  src="https://tailwindui.com/plus/img/ecommerce/icons/icon-calendar-light.svg"
                  alt="">
            </div>
          </div>
          <div class="mt-6 md:ml-4 md:mt-0 lg:ml-0 lg:mt-6">
            <h3 class="text-base font-medium text-gray-800 md:text-lg">Giao hàng trong ngày</h3>
            <p class="mt-3 text-sm text-gray-500">
              Chúng tôi cung cấp một dịch vụ giao hàng chưa bao giờ được thực hiện trước đây.
              Thanh toán ngay hôm nay và nhận sản phẩm của bạn trong vòng vài giờ.
            </p>
          </div>
        </div>
        <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
          <div class="md:flex-shrink-0">
            <div class="flow-root">
              <img
                  class="-my-1 mx-auto h-24 w-auto"
                  src="https://tailwindui.com/plus/img/ecommerce/icons/icon-gift-card-light.svg"
                  alt="">
            </div>
          </div>
          <div class="mt-6 md:ml-4 md:mt-0 lg:ml-0 lg:mt-6">
            <h3 class="text-base font-medium text-gray-800 md:text-lg">Giảm giá cả năm</h3>
            <p class="mt-3 text-sm text-gray-500">
              Đang chờ giảm giá? Bạn có thể sử dụng mã "ALLYEAR" khi thanh toán và được giảm giá
              quanh năm.
            </p>
          </div>
        </div>
        <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
          <div class="md:flex-shrink-0">
            <div class="flow-root">
              <img
                  class="-my-1 mx-auto h-24 w-auto"
                  src="https://tailwindui.com/plus/img/ecommerce/icons/icon-planet-light.svg"
                  alt="">
            </div>
          </div>
          <div class="mt-6 md:ml-4 md:mt-0 lg:ml-0 lg:mt-6">
            <h3 class="text-base font-medium text-gray-800 md:text-lg">Đối với hành tinh </h3>
            <p class="mt-3 text-sm text-gray-500">
              Chúng tôi đã cam kết dành 1% doanh thu cho việc bảo vệ và phục hồi môi trường tự
              nhiên.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <x-container class="py-12">
    <x-section-heading
        title="Tin tức"
        subtitle="Những tin tức mới nhất về công nghệ và phát triển web."
    />

    <x-carousel gap="8" loop="true">
      <div class="inline-block absolute w-48 sm:w-52 md:w-56 h-[29.4rem]"><x-card-book/></div>
      <div class="inline-block absolute w-48 sm:w-52 md:w-56 h-[29.4rem]"><x-card-book/></div>
      <div class="inline-block absolute w-48 sm:w-52 md:w-56 h-[29.4rem]"><x-card-book/></div>
      <div class="inline-block absolute w-48 sm:w-52 md:w-56 h-[29.4rem]"><x-card-book/></div>
      <div class="inline-block absolute w-48 sm:w-52 md:w-56 h-[29.4rem]"><x-card-book/></div>
      <div class="inline-block absolute w-48 sm:w-52 md:w-56 h-[29.4rem]"><x-card-book/></div>
      <div class="inline-block absolute w-48 sm:w-52 md:w-56 h-[29.4rem]"><x-card-book/></div>

    </x-carousel>
  </x-container>
</x-layout>
