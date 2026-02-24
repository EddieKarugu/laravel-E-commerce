<?php

namespace App\Livewire;
use App\Models\Cart;
use Livewire\Attributes\On;
use Livewire\Component;

class Totalupdater extends Component{
    public Cart $cartitem;

    public function mount(Cart $cartitem){
        $this->cartitem = $cartitem;
    }

    #[On('quantityChanged')]
public function render(){
        $total = $this->cartitem->price * $this->cartitem->quantity;
        return view('livewire.TotalUpdater', [
            'total' => $total
        ]);
    }
}
