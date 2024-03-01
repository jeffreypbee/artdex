<?php

namespace App\Livewire;

use App\Models\PokemonForm;
use App\Services\ArtableService;
use Livewire\Component;

class GalleryEntry extends Component
{

    public $art;
    public $isForm = false;

    public function mount() {
        if ($this->art->artable_type == PokemonForm::class) {
            $this->isForm = true;
        }
    }

    protected function getTitle(): string {
        $artableService = new ArtableService();
        return $artableService->getTitle($this->art->artable);
    }

    public function getPath() {
        if ($this->isForm) {
            return $this->art->artable->pokemon->name;
        }
        return $this->art->artable->name;
    }

    public function render()
    {
        return view('livewire.gallery-entry', [
            'number' => $this->art->artable->getNumber(),
            'title' => $this->getTitle(),
            'path' => $this->getPath()
        ]);
    }
}
