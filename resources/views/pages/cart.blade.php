<x-layout title="cart" tab="Cart">
    <div class="CartItems">
        @forelse($cartItems as $cartitem)
            <div class="cartitem">
                <img src="{{ asset('assets/images/' . $cartitem->image) }}" alt="{{$cartitem-> name}}">
                <h1>{{ $cartitem->name }}</h1>
                <p>{{ $cartitem->description }}</p>
                <h5>Ksh {{ $cartitem->price }}</h5>
            </div>
        @empty
            <h4>Your cart is empty</h4>
        @endforelse
    </div>
</x-layout>
