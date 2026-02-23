<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\Tiles;
use Livewire\Component;

class Tileselector extends Component
{
    public $activeTile = 'All';

    public function setTileName($tilename): void
    {
        $this->activeTile = $tilename;
        $this->dispatch('tileChanged', tileName: $tilename);
    }

    public function render()
    {
        return view('livewire.TileSelector', [
            'tiles'=> Tiles::all(),
        ]);
    }
}


