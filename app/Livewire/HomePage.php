<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Advertisement;

class HomePage extends Component
{
    public $banners = [];

    public function mount()
    {
        $this->banners = Advertisement::where('is_active', true)->get();
    }

    public function render()
    {
        return view('livewire.home-page');
    }
}
