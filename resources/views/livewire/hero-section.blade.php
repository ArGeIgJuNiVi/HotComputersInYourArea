<section class="bg-gray-50">
  <div class="mx-auto max-w-screen-xl px-4 py-10 lg:flex lg:items-center">
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
          class="block w-full rounded bg-blue-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto"
          href="/offer">
          Redeem your offer Now
        </a>
        <a
          class="block w-full rounded bg-blue-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto"
            href="{{ route('user.two-factor-authentication') }}">
          Two-Factor Authentication
        </a>
        @elseif (auth()->guest())
        <a
          class="block w-full rounded bg-blue-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto"
          href="/auth/login">
          Get Started
        </a>
        @endif


        <a wire:navigate
          class="block w-full bg-white rounded px-12 py-3 text-sm font-medium text-blue-600 shadow hover:text-blue-700 focus:outline-none focus:ring active:text-blue-500 sm:w-auto"
          href="all/products">
          Explore More
        </a>
      </div>
    </div>
  </div>
</section>