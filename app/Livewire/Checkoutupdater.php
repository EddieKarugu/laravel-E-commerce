<?php

namespace App\Livewire;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\On;

class Checkoutupdater extends Component {

    #[On('quantityChanged')]
    public function render(){
        $subtotal = 0;
        $carts = Auth::user()->carts;

        foreach($carts as $cart){
            $itemtotal = $cart->price * $cart->quantity;
            $subtotal += $itemtotal;
        }

        return view('livewire.CheckoutUpdater', [
            'subtotal' => $subtotal,
        ]);
    }
}
