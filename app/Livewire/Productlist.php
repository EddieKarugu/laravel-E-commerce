<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Component;

class Productlist extends Component
{
    public $category = 'All';
    public $searchString = ''; // Initialize as empty string

    /**
     * Listener for category changes from other components (tiles)
     */
    #[On('tileChanged')]
    public function updateCategory($tileName)
    {
        $this->category = $tileName;
        // Optional: Clear search when a category is clicked
        $this->searchString = '';
    }

    /**
     * Listener for the Search event
     * (Kept so your SearchControl component still works)
     */
    #[On('searched')]
    public function updateproducts($searchString)
    {
        $this->searchString = $searchString;
    }

    public function render()
    {
        // 1. Start a base query
        $query = Product::query();

        // 2. Check if there is a search string (Flutter-style reactivity)
        if (!empty($this->searchString)) {
            // We group the OR condition in a function to keep logic clean
            $query->where(function($q) {
                $q->where('name', 'like', '%' . $this->searchString . '%')
                    ->orWhere('category', 'like', '%' . $this->searchString . '%')
                    ->orWhere('description', 'like', '%' . $this->searchString . '%');
            });
        }
        // 3. If no search, check the category filter
        elseif ($this->category !== 'All') {
            $query->where('category', $this->category);
        }

        // 4. Execute the query and return the view
        return view('livewire.ProductList', [
            'products' => $query->get(),
        ]);
    }
}
