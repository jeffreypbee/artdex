<?php

namespace App\Livewire;

use Livewire\Component;

class PokedexEntry extends Component
{

    public $pokemon;
    public $form;

    public function render()
    {
        $image = null;
        if ($this->form == null && count($this->pokemon->art) > 0) {
            $image = $this->pokemon->art[0]->image;
        } else if ($this->form != null && count($this->form->art) > 0) {
            $image = $this->form->art[0]->image;
        }
        return view('livewire.pokedex-entry', [
            'image' => $image
        ]);
    }
}
