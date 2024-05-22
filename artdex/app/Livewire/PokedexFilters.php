<?php

namespace App\Livewire;

use Livewire\Component;
use Statamic\Facades\Term;

class PokedexFilters extends Component
{
    public function getGenerations() {
        return [1, 2, 3, 4, 5, 6, 7, 8, 9];
    }

    public function render()
    {
        return view('livewire.pokedex-filters', [
            'types' => Term::query()->where('taxonomy', 'types')->get(),
            'tags' => Term::query()->where('taxonomy', 'tags')->get(),
            'gens' => $this->getGenerations()
        ]);
    }
}
