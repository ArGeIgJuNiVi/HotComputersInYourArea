<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;

class AllProducts extends Component
{
    public $category_id;

    public function mount($category_id = null)
    {
        $this->category_id = $category_id;
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.all-products', [
            'category_id' => $this->category_id,
            'categories' => $categories
        ]);
    }
}