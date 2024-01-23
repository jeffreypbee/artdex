<?php

namespace App\Livewire;

use App\Models\Type;
use App\Models\Pokemon;
use Livewire\Component;
use App\Models\Generation;
use Livewire\Attributes\Url;

class Pokedex extends Component
{

    public function render()
    {
        return view('livewire.pokedex', [
            'pokedex' => Pokemon::orderBy('number', 'ASC')->get(),
            'generations' => Generation::orderBy('generation', 'ASC')->get(),
            'types' => Type::orderBy('name', 'ASC')->get()
        ]);
    }
}
