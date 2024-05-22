<?php

namespace App\Livewire;

use Livewire\Component;
use Statamic\Facades\Entry;

class Pokedex extends Component
{
    public function filterPokedex() {
        $pokedex = Entry::query()
            ->where('collection', 'pokemon')
            ->orderBy('number')
            ->get();
        return $pokedex;
    }

    public function render()
    {
        return view('livewire.pokedex', [
            'pokedex' => $this->filterPokedex()
        ]);
    }
}
