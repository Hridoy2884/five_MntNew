<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductPage extends Component
{
    public $products;

    public function mount()
    {
        // Eager load category to avoid N+1 problem
        $this->products = Product::with('category')
            ->where('is_active', true)
            ->latest()
            ->get();
    }

    public function render()
    {
        return view('livewire.product-page', [
            'products' => $this->products,
        ]);
    }
}
