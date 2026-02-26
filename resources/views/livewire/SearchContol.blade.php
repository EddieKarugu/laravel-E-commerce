<div class="search">
    <form wire:submit.prevent="changeProducts">
        @csrf
        <input type="text" value="{{ old('searched') }}" name="searched" placeholder="search here" wire:model.live.debounce.30ms="searchString">
        <button type="submit">Search</button>
    </form>
</div>
