<div class="tiles">
    @foreach($tiles as $tile)
        <div class="{{ $activeTile === $tile->name? 'activeTile' : 'tile' }}"  wire:click="setTileName('{{ $tile->name }}')">
            <img src="{{ asset('assets/images/' . $tile->image) }}" alt="tile">
            <h5>{{ $tile->name }}</h5>
        </div>
    @endforeach
</div>
