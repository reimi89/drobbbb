<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class PageHome extends Component
{
    public function render()
    {
        $categories = Category::get();
        return view('livewire.page-home', compact('categories'));
    }
}
