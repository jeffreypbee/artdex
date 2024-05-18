<?php

namespace App\Livewire;

use App\Models\Pokemon;
use Livewire\Component;

class CompletionWidget extends Component
{
    public $fraction;

    public function mount() {
        $artCount = 0;
        foreach(Pokemon::all() as $pokemon) {
            if ($pokemon->hasArt()) {
                $artCount++;
            }
        }
        $pkmnCount = Pokemon::count();
        $this->fraction = $artCount / $pkmnCount;
    }

    public function render()
    {
        return view('livewire.completion-widget');
    }
}
