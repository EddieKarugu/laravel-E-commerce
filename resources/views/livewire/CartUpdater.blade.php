<div class="btns">
    @if( !$isCarted)
    <button class="cartBtn" wire:click="addToCart">Add to Cart</button>
    @else
        <button class="isCartedBtn">Item Already in Cart</button>
    @endif
</div>
