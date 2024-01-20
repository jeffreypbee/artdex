<?php

namespace App\Livewire;

use App\Models\Pokemon;
use Livewire\Component;

class Pokedex extends Component
{
    public function render()
    {
        return view('livewire.pokedex', [
            'pokedex' => Pokemon::orderBy('number', 'ASC')->get()
        ]);
    }
}
