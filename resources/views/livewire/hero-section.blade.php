<div>
<section class="bg-cover bg-center relative" 
        style="background-image: url('{{ asset('images/Designer.jpeg') }}'); height: 100vh; background-size: cover;">
    <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-transparent to-black/50"></div>

    <div class="relative mx-auto max-w-screen-xl px-6 py-12 lg:flex lg:items-center h-full">
      <div class="mx-auto max-w-xl text-center">
        <h1 class="text-4xl font-extrabold sm:text-5xl text-white drop-shadow-lg">
          Hot Computers In Your Area
        </h1>
        <p class="mt-4 sm:text-xl/relaxed text-gray-300 drop-shadow-md">
          Browse through our computer selection
        </p>
        <div class="flex justify-center mt-8">
          <a wire:navigate
            class="block rounded px-12 bg-blue-600 py-3 text-sm font-medium text-white shadow focus:outline-none focus:ring"
            href="all/products" style="; color: white; transition: transform 0.2s, box-shadow 0.2s; transform: scale(1); width: 220px;"
            onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.2)';"
            onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none'">
            Our Products
          </a>
      </div>
    </div>
  </section>

  <section class="bg-gray-50 py-16">
    <div class="max-w-screen-xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 px-4">
      <div class="text-center border border-gray-200 p-6 rounded-lg hover:shadow-lg">
        <div class="text-4xl mb-4">🚚</div>
        <h3 class="text-lg font-semibold text-gray-800">Fast Delivery</h3>
        <p class="text-sm text-gray-600">Delivery in 2 business days</p>
      </div>
      <div class="text-center border border-gray-200 p-6 rounded-lg hover:shadow-lg">
        <div class="text-4xl mb-4">🔄</div>
        <h3 class="text-lg font-semibold text-gray-800">24 Hours Return</h3>
        <p class="text-sm text-gray-600">100% Money-Back Guarantee</p>
      </div>
      <div class="text-center border border-gray-200 p-6 rounded-lg hover:shadow-lg">
        <div class="text-4xl mb-4">🔒</div>
        <h3 class="text-lg font-semibold text-gray-800">Secure Payment</h3>
        <p class="text-sm text-gray-600">Your Money Is Safe</p>
      </div>
      <div class="text-center border border-gray-200 p-6 rounded-lg hover:shadow-lg">
        <div class="text-4xl mb-4">🎧</div>
        <h3 class="text-lg font-semibold text-gray-800">Support</h3>
        <p class="text-sm text-gray-600">We Are Ready To Assist</p>
      </div>
    </div>
  </section>
</div>