<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ShoppingKart;
use Illuminate\Support\Facades\Auth;

class ShoppingKartComponent extends Component
{
    public $kartItems = [];
    public $subtotal;
    public $vat;
    public $discount;
    public $total;

    public $pageTitle = '';

    protected $listeners = [
        'kartUpdated' => 'render',
    ];
    public function mount(){
       $this->kartItems = $this->getKartItems();
        $this->calculateTotals();
    }

    public function calculateTotals()
    {
        $this->subtotal = $this->kartItems->sum(function($item) {
            return $item->quantity * $item->product->price;
        });
        $this->vat = $this->subtotal * 0.1;
        $this->discount = 5;
        $this->total = $this->subtotal + $this->vat - $this->discount;
    }

    public function getKartItems()
    {
        return ShoppingKart::with('product')
            ->where('user_id', Auth::id())
            ->get();
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

    public function updateQuantity($kartItemId, $quantity)
    {
        $kartItem = ShoppingKart::find($kartItemId);
        if ($kartItem) {
            $kartItem->quantity = $quantity;
            $kartItem->save();
            $this->dispatch('kartUpdated');
        }
    }

    public function removeItem($kartItemId)
    {
        $kartItem = ShoppingKart::find($kartItemId);
        if ($kartItem) {
            $kartItem->delete();
            $this->dispatch('kartUpdated');
        }
    }
    public function render()
    {
        $this->kartItems = $this->getKartItems();
        $this->calculateTotals();

        return view('livewire.shopping-kart-component', [
            'kartItems' => $this->kartItems
        ])->title('E-commerce | Shopping kart');
    }
}
