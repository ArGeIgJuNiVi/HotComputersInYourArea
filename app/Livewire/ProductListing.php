<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class ProductListing extends Component
{
    public $products;
    public $searchTerm = '';
    public $category_id;
    public $current_product_id;

    public function mount($category_id, $current_product_id)
    {
        $this->category_id = $category_id;
        $this->current_product_id = $current_product_id;
        $this->updateProductList();
    }

    public function updatedSearchTerm()
    {
        $this->updateProductList();
    }

    public function updateProductList()
    {
        $query = Product::with('category')
            ->where('id', '!=', $this->current_product_id)
            ->where('name', 'like', '%' . $this->searchTerm . '%');

        if ($this->category_id == 0 || $this->category_id == 'all') {
        } 
        else {
            $query->where('category_id', $this->category_id);
        }

        $this->products = $query->orderBy('created_at', 'DESC')->get();
    }

    public function render()
    {
        return view('livewire.product-listing', [
            'categories' => Category::all()
        ]);
    }
}