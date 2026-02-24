<div class="quantity">
    <button class="addbtn" wire:click="addQuantity"> + </button>
    <h5> {{ $cartItem->quantity }} </h5>
    <button class="addbtn" wire:click="removeQuantity"> - </button>
</div>
