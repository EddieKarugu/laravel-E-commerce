<?php
namespace App\Livewire;

use App\Models\Cart;
use Livewire\Component;

class Quantitychanger extends Component{

    public Cart $cartItem;

    public function mount(Cart $cartItem): void
    {
        $this->cartItem = $cartItem;
    }
    public function addQuantity(): void
    {
        $this->cartItem->quantity = $this->cartItem->quantity + 1;
        $this->cartItem->save();
        $this->dispatch('quantityChanged');
    }

    public function removeQuantity(): void
    {
        if($this->cartItem->quantity > 1){
            $this->cartItem->quantity = $this->cartItem->quantity - 1;
            $this->cartItem->save();
            $this->dispatch('quantityChanged');
        }
        else{
            $this->cartItem->quantity = 1;
        }
    }

    public function render(){
        return view('livewire.QuantityChanger');
    }
}
