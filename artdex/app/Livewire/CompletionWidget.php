<?php

namespace App\Livewire;

use App\Models\Pokemon;
use Livewire\Component;

class CompletionWidget extends Component
{
    public $fraction;

    public function mount() {
        $artCount = Pokemon::has('art')->count();
        $pkmnCount = Pokemon::count();
        $this->fraction = $artCount / $pkmnCount;
    }

    public function render()
    {
        return view('livewire.completion-widget');
    }
}
