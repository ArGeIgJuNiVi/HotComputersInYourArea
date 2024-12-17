<div class='px-10 md:px-20 sm:px-30 py-3'>
    <h2 class='font-medium text-[20px] my-3'>
        @if ($category_id == 1)
            Laptop
        @elseif ($category_id == 2)
            PC
        @elseif ($category_id == 3)
            Used
        @else
            All
        @endif
        Products
    </h2>
    <livewire:product-listing :category_id="$category_id ?? 'all'" :current_product_id="0"/>
</div>