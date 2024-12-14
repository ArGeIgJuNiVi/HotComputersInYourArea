<div class='px-10 md:px-20 sm:px-30 py-3 fade-element'>
        @include('components.navigation.view-all',[
            'Category' => 'Laptops'
        ])
        <livewire:product-listing :category_id="1" :current_product_id="0"/>

        @include('components.navigation.view-all',[
            'Category' => 'Desktops'
        ])
        <livewire:product-listing :category_id="2" :current_product_id="0"/>

        @include('components.navigation.view-all',[
            'Category' => 'Used'
        ])
        <livewire:product-listing :category_id="3" :current_product_id="0"/>

        @include('components.navigation.view-all',[
            'Category' => 'Refurbished'
        ])
        <livewire:product-listing :category_id="4" :current_product_id="0"/>

</div>
