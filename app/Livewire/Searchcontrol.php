<?php


namespace App\Livewire;

use Livewire\Component;

class Searchcontrol extends Component
{
    public $searchString = '';

    /**
     * This function runs automatically every time $searchString changes.
     * It acts exactly like Flutter's onChanged.
     */
    public function updatedSearchString($value)
    {
        // We dispatch the event 'searched' with the current input value
        $this->dispatch('searched', $value);
    }

    public function render()
    {
        return view('livewire.SearchContol');
    }
}
