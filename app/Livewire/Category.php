<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category as CategoryModel;

class Category extends Component
{
    public function render()
    {
        // Fetch only active categories
        $categories = CategoryModel::where('is_active', true)->latest()->get();

        return view('livewire.category', [
            'categories' => $categories,
        ]);
    }
}
