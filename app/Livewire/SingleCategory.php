<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class SingleCategory extends Component
{
    public $category_slug;

    public function mount($category_slug)
    {
        $this->category_slug = $category_slug;
    }

    public function render()
    {
        $category = Category::where('category_slug', $this->category_slug)->first();

        $products = $category->products()
            ->where('is_active', true)
            ->get();

        return view('livewire.single-category', [
            'category' => $category,
            'products' => $products,
            'categories' => collect([$category]),
        ]);
    }
}
