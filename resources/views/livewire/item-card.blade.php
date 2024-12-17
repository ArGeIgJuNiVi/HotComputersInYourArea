<div class="bg-white shadow-lg rounded-lg border border-gray-200 overflow-hidden transition-shadow duration-300 p-3 h-[350px]" 
     onmouseover="this.style.boxShadow='0 10px 15px rgba(0, 0, 0, 0.2)'; this.style.transform='scale(1.02)'; this.style.transition='transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out';" 
     onmouseout="this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.1)'; this.style.transform='scale(1)';">
    <a wire:navigate href="/product/{{$product->id}}/details">
        <div class="relative overflow-hidden rounded-t-lg h-[150px] w-[200px] flex justify-center items-center mx-auto">
            <img 
                src="{{ $product->image ? Storage::url($product->image) : asset('images/placeholder-image.jpg') }}" 
                srcset="{{ $product->image ? Storage::url($product->image) : asset('images/placeholder-image.jpg') }} 1x, {{ $product->image ? Storage::url($product->image) : asset('images/placeholder-image.jpg') }} 2x"
                alt="product-images" 
                class="object-cover w-full h-full">
        </div>
        <div class="p-4 space-y-3 flex flex-col h-full">
            <h2 class="text-lg font-semibold text-gray-800 line-clamp-1">{{ $product->name }}</h2>

            <p class="text-sm text-gray-500 line-clamp-2">{{ $product->description }}</p>
            <div class="flex justify-between items-center mt-2">
                <span class="bg-green-100 text-green-700 text-xs font-medium px-2 py-1 rounded-full">
                    {{ $product->category->name }}
                </span>
                <span class="text-lg font-semibold text-gray-800">{{ $product->price }}.-</span>
            </div>
            <div class="mt-auto">
                @if (auth()->check())
                <a wire:click.prevent="addToKart({{ $product->id }})" href="#" class="block">
                    <div class="flex items-center justify-center w-full rounded bg-blue-600 px-5 py-3 text-sm font-medium text-white shadow hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-500">
                        <div wire:loading class="animate-spin inline-block h-5 w-5 border-2 border-current border-t-transparent rounded-full" role="status" aria-label="loading"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="h-6 w-6 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                        <span class="ml-2">Add to Kart</span>
                    </div>
                </a>
                @else
                <a wire:navigate href='/auth/login' class="block">
                    <div class="flex items-center justify-center w-full rounded bg-blue-600 px-5 py-3 text-sm font-medium text-white shadow hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="h-6 w-6" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                        <span class="ml-2">Log in to add</span>
                    </div>
                </a>
                @endif
            </div>
        </div>
    </a>
</div>