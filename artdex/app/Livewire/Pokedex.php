<?php

namespace App\Livewire;

use App\Models\Type;
use App\Models\Pokemon;
use Livewire\Component;
use App\Models\Generation;
use Livewire\Attributes\Url;
use Illuminate\Database\Eloquent\Builder;

class Pokedex extends Component
{

    public $pokedex;

    #[Url]
    public $type = '';

    #[Url]
    public $gen = '';

    public function mount() {

        $this->filterPokedex();

    }

    public function filterType($typeName) {
        if ($this->type === $typeName) {
            $this->reset('type');
        } else {
            $this->type = $typeName;
        }
        $this->filterPokedex();
    }

    public function filterGen($generation) {
        if ($this->gen ==  $generation) {
            $this->reset('gen');
        } else {
            $this->gen = $generation;
        }
        $this->filterPokedex();
    }

    protected function filterPokedex() {
        $this->pokedex = Pokemon::
            when($this->gen != '', function (Builder $query, $gen) {
                $query->generation($this->gen);
            })
            ->when($this->type != '', function (Builder $query, $type) {
                $query->hasType($this->type);
            })
            ->orderBy('number', 'ASC')
            ->get();
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
