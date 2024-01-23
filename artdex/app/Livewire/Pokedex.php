<?php

namespace App\Livewire;

use App\Models\Type;
use App\Models\Pokemon;
use Livewire\Component;
use App\Models\Generation;
use Livewire\Attributes\Url;

class Pokedex extends Component
{

    public $pokedex;

    #[Url]
    public $type = '';

    public function mount() {

        $this->filterPokedex();

    }

    public function filterType($typeName) {
        $this->type = $typeName;
        $this->filterPokedex();
    }

    protected function filterPokedex() {

        if ($this->type != '') {
            $this->pokedex =  Pokemon::hasType($this->type)->orderBy('number', 'ASC')->get();
        } else {
            $this->pokedex = Pokemon::orderBy('number', 'ASC')->get();
        }
    }

    public function render()
    {
        return view('livewire.pokedex', [
            'pokedex' => $this->pokedex,
            'generations' => Generation::orderBy('generation', 'ASC')->get(),
            'types' => Type::orderBy('name', 'ASC')->get()
        ]);
    }
}
