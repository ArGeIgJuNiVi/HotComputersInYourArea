<section href="#section1" class="bg-gray-50 bubble">
  <style>
    .bubble{
      margin-top:40px;
    }
  </style>
  <div class="mx-auto max-w-screen-xl px-6 py-10 lg:flex lg:items-center">
    <div class="mx-auto max-w-xl text-center">
      <h1 class="text-3xl font-extrabold sm:text-5xl">
        Hot Computers In Your Area
        <strong class="font-extrabold text-blue-700 sm:block text-3xl"> Discover Our Products </strong>
      </h1>

      <p class="mt-4 sm:text-xl/relaxed">
        Browse through our computer selection
      </p>

      <div class="mt-8 flex flex-wrap justify-center gap-4">
        @if (auth()->check())
        <a
          class="block w-full rounded bg-blue-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto hover-scale"
          href="/offer">
          Redeem your offer Now
        </a>
        @else
        <a
          class="block w-full rounded bg-blue-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto hover-scale"
          href="/auth/login">
          Get Started
        </a>
        @endif

        <a wire:navigate
        class="block w-full bg-white rounded px-12 py-3 text-sm font-medium text-blue-600 shadow hover:bg-gray-100 focus:outline-none focus:ring active:text-blue-500 sm:w-auto hover-scale"
        href="all/products">
          Explore More
        </a>

        <style>
          .hover-scale {
            transform: scale(1);
            transition: transform 0.3s ease-in-out;
          }
          .hover-scale:hover {
            transform: scale(1.1);}
          
        </style>
      </div>
    </div>
  </div>
</section>