<?php

namespace App\Livewire;

use App\Models\Pokemon;
use Livewire\Component;

class CompletionWidget extends Component
{
    public $fraction;

    public function mount() {
        $pkmnCount = Pokemon::count();
        $this->fraction = Pokemon::countArt() / $pkmnCount;
    }

    public function render()
    {
        return view('livewire.completion-widget');
    }
}
