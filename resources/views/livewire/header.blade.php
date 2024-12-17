<header class="bg-white shadow-sm">
  <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
    <a class="block text-blue-600" href="#">
      <span class="sr-only">Home</span>
      <img src="/images/HCA.png" alt="Logo" class="w-12 h-12 rounded-xl">
    </a>

    <div class="flex flex-1 items-center justify-end md:justify-between">
      <nav aria-label="Global" class="hidden md:block">
        <ul class="flex items-center gap-6 text-sm">
          <li>
            <a class="text-gray-500 {{Request::is('/') ? 'text-gray-700 font-bold' : ''}} transition hover:text-gray-500/75" wire:navigate href="/"> Home</a>
          </li>
          <li>
            <a class="text-gray-500 {{Request::is('all/products') ? 'text-gray-700 font-bold' : ''}} transition hover:text-gray-500/75" wire:navigate href="/all/products"> Explore More</a>
          </li>

          <li>
            <a class="text-gray-500 {{Request::is('about') ? 'text-gray-700 font-bold' : ''}} transition hover:text-gray-500/75" wire:navigate href="/about"> About </a>
          </li>

          <li>
            <a class="text-gray-500 {{Request::is('contacts') ? 'text-gray-700 font-bold' : ''}} transition hover:text-gray-500/75" wire:navigate href="/contacts"> Contacts </a>
          </li>
        </ul>
      </nav>

      <div class="flex items-center gap-4">
        <div class=" sm:flex   sm:gap-4">
          @if (auth()->check())
          <livewire:shopping-kart-icon />
          <a href="/auth/logout">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 hover:text-red-700">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
            </svg>
          </a>

          @else
          <a
            class="block rounded-md bg-blue-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-blue-700"
            href="/auth/login">
            Get Started
          </a>
          @endif

        </div>

        <button
          class="block rounded bg-gray-100 p-2.5 text-gray-600 transition hover:text-gray-600/75 md:hidden">
          <span class="sr-only">Toggle menu</span>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</header>