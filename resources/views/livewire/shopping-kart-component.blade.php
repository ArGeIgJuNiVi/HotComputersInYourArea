<section class="bg-gray-50 py-10">
  <div class="container mx-auto max-w-4xl px-6">
    <header class="text-center mb-8">
      <h1 class="text-2xl font-bold text-gray-900 sm:text-4xl">Your Cart</h1>
      <div wire:loading class="animate-spin inline-block h-6 w-6 border-[3px] border-current border-t-transparent text-blue-600 rounded-full" role="status" aria-label="loading">
        <span class="sr-only">Loading...</span>
      </div>
    </header>

    <div class="bg-white shadow-md rounded-lg p-6">
      <ul class="divide-y divide-gray-200">
        @foreach($kartItems as $item)
        <li class="flex items-center gap-4 py-4">
          <img src="{{ Storage::url($item->product->image) }}" alt="{{ $item->product->name }}" class="h-16 w-16 rounded object-cover" />

          <div class="flex-1">
            <h3 class="text-base font-medium text-gray-900">{{ $item->product->name }}</h3>
          </div>

          <div class="flex items-center gap-4">
            <form>
              <label for="Line{{ $item->id }}Qty" class="sr-only">Quantity</label>
              <input type="number" min="1" value="{{ $item->quantity }}" id="Line{{ $item->id }}Qty" wire:change="updateQuantity({{ $item->id }}, $event.target.value)" class="h-10 w-14 rounded border-gray-300 text-center text-sm focus:ring-blue-500 focus:border-blue-500" />
            </form>

            <button wire:click="removeItem({{ $item->id }})" class="text-gray-500 hover:text-red-600 transition">
              <span class="sr-only">Remove item</span>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
              </svg>
            </button>
          </div>
        </li>
        @endforeach
      </ul>
    </div>

    <div class="mt-8 flex flex-col items-end">
      <div class="bg-gray-100 rounded-lg p-6 w-full max-w-md">
        <dl class="space-y-4 text-sm text-gray-700">
          <div class="flex justify-between">
            <dt>Subtotal</dt>
            <dd>{{ $subtotal }}.-</dd>
          </div>
          <div class="flex justify-between">
            <dt>VAT</dt>
            <dd>{{ $vat }}.-</dd>
          </div>
          <div class="flex justify-between">
            <dt>Discount</dt>
            <dd>-{{ $discount }}.-</dd>
          </div>
          <div class="flex justify-between text-base font-medium">
            <dt>Total</dt>
            <dd>{{ $total }}.-</dd>
          </div>
        </dl>
      </div>

      <div class="mt-6 flex justify-end gap-4">
        <a href="all/products" class="rounded bg-blue-600 px-4 py-2 text-sm font-medium text-white shadow hover:bg-blue-500 transition">
          Continue Shopping
        </a>
        <a href="#" class="rounded bg-gray-800 px-4 py-2 text-sm font-medium text-white shadow hover:bg-gray-700 transition">
          Checkout
        </a>
      </div>
    </div>
  </div>
</section>
