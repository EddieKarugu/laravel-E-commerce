<x-layout title="cart" tab="Cart">
    <x-notifications/>
    <div class="CartItems">
        @forelse($cartItems as $cartitem)
            <div class="cartitem">
                <img src="{{ asset('assets/images/' . $cartitem->image) }}" alt="{{$cartitem-> name}}">
                <div class="info">
                    <h1>{{ $cartitem->name }}</h1>
                    <h5>Ksh {{ $cartitem->price }}</h5>
                    <livewire:quantitychanger :cartItem="$cartitem" />
                    <livewire:totalupdater :cartitem="$cartitem" />
                    <form action="{{ route('cart.destroy', $cartitem) }}"
                          method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="deleteBtn"
                                onclick="return confirm('Are you sure you want to remove this item from your cart? This action cannot be undone')"
                        >Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <h4>Your cart is empty</h4>
        @endforelse
    </div>
    <livewire:checkoutupdater />
</x-layout>
