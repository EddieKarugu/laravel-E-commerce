<?php
namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Component;

class Productlist extends Component{
    public $category = 'All';

    #[On('tileChanged')]
    public function updateCategory($tileName){
        $this->category = $tileName;
    }

    public function render(){
        $products = ($this->category === 'All')
            ? Product::all()
            : Product::where('category', $this->category)->get();

        return view('livewire.ProductList', [
            'products' => $products,
        ]);
    }
}
