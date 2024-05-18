<?php

namespace App\Livewire;

use Livewire\Component;

class PokedexEntry extends Component
{

    public $pokemon;
    public $form;
    public $isForm;
    public $types;

    public function mount() {
        if ($this->form == null) {
            $this->isForm = false;
        } else {
            $this->isForm = true;
        }

        $this->types = $this->getTypes();
    }

    protected function getImage() {
        if (!$this->isForm && $this->pokemon->hasArt()) {
            return $this->pokemon->art[0]->image;
        } else if ($this->isForm && count($this->form->art) > 0) {
            return $this->form->art[0]->image;
        }
        return null;
    }

    protected function getTypes() {
        if ($this->isForm) {
            if ($this->form->type2 == null) {
                return [$this->form->type1];
            } else {
                return [$this->form->type1, $this->form->type2];
            }
        }
        if ($this->pokemon->type2 == null) {
            return [$this->pokemon->type1];
        }
        return [$this->pokemon->type1, $this->pokemon->type2];
    }

    protected function getBackground() {
        if (count($this->types) === 1) {
            return $this->types[0]->color;
        } else {
            return 'linear-gradient(to right, ' . $this->types[0]->color . ', ' . $this->types[1]->color . ');';
        }
        return 'white';
    }

    public function render()
    {
        return view('livewire.pokedex-entry', [
            'image' => $this->getImage(),
            'types' => $this->types,
            'background' => $this->getBackground()
        ]);
    }
}
