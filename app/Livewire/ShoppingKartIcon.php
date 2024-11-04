<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ShoppingKart;
use Illuminate\Support\Facades\Auth;

class ShoppingKartIcon extends Component
{
    public $kartCount = 0;

    protected $listeners = [
        'kartUpdated' => 'updateKartCount',
    ];

    public function mount(){
        $this->updateKartCount();
    }

    public function updateKartCount(){
        $this->kartCount = ShoppingKart::where('user_id', Auth::id())->sum('quantity');
    }
    public function render()
    {
        return view('livewire.shopping-kart-icon');
    }
}
