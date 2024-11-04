<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\ShoppingKart;
use Illuminate\Support\Facades\Auth;

class ProductDetails extends Component
{
    public $product;
    public function mount($product_id){
        $this->product = Product::find($product_id);
    }

    public function addToKart($productId)
    {
        $kartItem = ShoppingKart::where('user_id', Auth::id())
            ->where('product_id', $productId)
            ->first();

        if ($kartItem) {
            $kartItem->quantity += 1;
            $kartItem->save();
        } else {
            ShoppingKart::create([
                'user_id' => Auth::id(),
                'product_id' => $productId,
                'quantity' => 1,
            ]);
        }
        $this->dispatch('kartUpdated');
    }
    public function render()
    {
        return view('livewire.product-details');
    }
}
