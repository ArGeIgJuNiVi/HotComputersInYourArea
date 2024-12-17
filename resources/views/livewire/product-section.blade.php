<div class="container mx-auto px-6">
    <div class="text-center mb-8">
        <hr class="border-gray-300 my-6">
        <p class="text-lg font-semibold">
            <br>
            Discover the perfect category of products to explore and find exactly what you need. 
            From cutting-edge laptops to budget-friendly used computers, we've got you covered.
        </p>
    </div>
    <div class="px-4 py-3 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 justify-center">
        <a wire:navigate
           class="block rounded-lg overflow-hidden shadow-lg transition-transform duration-300 ease-in-out transform"
           href="{{ route('all.products', ['category_id' => 1]) }}"
           style="background-image: url('images/laptop_home.jpg'); background-size: cover; background-position: center; height: 250px; outline: none;"
           aria-label="Explore laptops"
           onmouseover="this.style.transform='scale(1.05)';"
           onmouseout="this.style.transform='scale(1)';">
            <div class="flex items-center justify-center h-full text-center text-white text-xl font-medium p-4"
                 style="background: linear-gradient(180deg, rgba(37, 99, 235, 0.6) 0%, rgba(37, 99, 235, 0.2) 100%);">
                Laptops
            </div>
        </a>
        <a wire:navigate
           class="block rounded-lg overflow-hidden shadow-lg transition-transform duration-300 ease-in-out transform"
           href="{{ route('all.products', ['category_id' => 2]) }}"
           style="background-image: url('images/pc3_home.jpg'); background-size: cover; background-position: center; height: 250px; outline: none;"
           aria-label="Explore PCs"
           onmouseover="this.style.transform='scale(1.05)';"
           onmouseout="this.style.transform='scale(1)';">
            <div class="flex items-center justify-center h-full text-center text-white text-xl font-medium p-4"
                 style="background: linear-gradient(180deg, rgba(37, 99, 235, 0.6) 0%, rgba(37, 99, 235, 0.2) 100%);">
                PCs
            </div>
        </a>
        

        <a wire:navigate
           class="block rounded-lg overflow-hidden shadow-lg transition-transform duration-300 ease-in-out transform"
           href="{{ route('all.products', ['category_id' => 3]) }}"
           style="background-image: url('images/used_home.jpg'); background-size: cover; background-position: center; height: 250px; outline: none;"
           aria-label="Explore used computers"
           onmouseover="this.style.transform='scale(1.05)';"
           onmouseout="this.style.transform='scale(1)';">
            <div class="flex items-center justify-center h-full text-center text-white text-xl font-medium p-4"
                 style="background: linear-gradient(180deg, rgba(37, 99, 235, 0.6) 0%, rgba(37, 99, 235, 0.2) 100%);">
                Used Computers
            </div>
        </a>
    </div>

    <div class="text-center mt-8">
        <p class="text-lg font-semibold">
            Our team is dedicated to working for our customers, ensuring that you receive the best service and products. 
            <a href="/about" class="text-blue-600 hover:underline">Learn more about us.</a>
        </p>
        <br>
        <hr class="border-gray-300 my-6">
    </div>
</div>