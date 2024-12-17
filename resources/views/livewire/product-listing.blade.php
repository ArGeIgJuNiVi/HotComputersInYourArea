<div class="min-h-screen">
    @if (!Request::is('product/*/details'))
        @include('components.search-component')
        <div class="relative mt-0 mb-4">
            <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-0 sm:py-0">
                <div class="text-center">
                    <div class="mt-0 sm:mt-0 flex justify-center space-x-4">
                        @foreach ($categories as $category)
                            <a class="m-1 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none {{ $category_id == $category->id ? 'text-black' : 'bg-white text-gray-800' }}" href="{{ route('all.products', ['category_id' => $category->id]) }}" style="{{ $category_id == $category->id ? 'background-color: rgba(37, 99, 235, 0.1);' : '' }}">
                                {{ $category->name }}
                            </a>
                        @endforeach
                        @if ($category_id && !Request::is('all/products'))
                            <a class="m-1 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none {{ $category_id == null ? 'text-black' : 'bg-white text-gray-800' }}" href="{{ route('all.products') }}" style="{{ $category_id == null ? 'background-color: rgba(37, 99, 235, 0.1);' : '' }}">
                                See All
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="grid grid-cols-2 lg:grid-cols-4 sm:grid-cols-2 md:grid-cols-3 gap-3">
        @if (count($products) > 0)
            @foreach ($products as $product)
                <livewire:item-card lazy :product_details="$product" wire:key="{{ $product->id }}"/>
            @endforeach
        @else
            <h2 class="text-2xl text-gray-300">No Product Available</h2>
        @endif
    </div>
</div>