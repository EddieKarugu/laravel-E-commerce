<?php
namespace App\Livewire;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\On;

class Cartupdater extends Component{

    public $cartitem;

    public function mount(Product $cartitem){
        $this->cartitem = $cartitem;
    }

    public function addToCart(){

        Auth::user()->carts()->create([
            'id' => $this->cartitem->id,
            'name'=>$this->cartitem->name,
            'image'=>$this->cartitem->image,
            'price'=>$this->cartitem->price,
            'description'=>$this->cartitem->description,
            'category'=>$this->cartitem->category,
        ]);
        $this->dispatch('cartUpdated');
    }

    #[On('cartUpdated')]
    public function render(){
        $isCarted = false;

        if (Auth::check()) {
            // Check if a cart record exists for this user AND this product
            $isCarted = Cart::where('user_id', Auth::id())
                ->where('id', $this->cartitem->id)
                ->exists();
        }
        return view('livewire.CartUpdater', [
            'isCarted' => $isCarted,
            'product' => $this->cartitem,
        ]);
    }
}
