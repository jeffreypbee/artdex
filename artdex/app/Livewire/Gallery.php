<?php

namespace App\Livewire;

use App\Models\Art;
use Livewire\Component;

class Gallery extends Component
{
    public function render()
    {
        return view('livewire.gallery', [
            'gallery' => Art::published()->latest()->get()
        ]);
    }
}
