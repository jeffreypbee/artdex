<?php

namespace App\Livewire;

use Livewire\Component;

class GalleryEntry extends Component
{

    public $art;

    public function render()
    {
        return view('livewire.gallery-entry');
    }
}
