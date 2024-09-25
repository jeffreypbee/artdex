<?php

namespace App\Livewire;

use App\Models\Art;
use Livewire\Component;
use Livewire\Attributes\Url;

class Gallery extends Component
{

    public $gallery;

    #[Url]
    public $sort = '';

    public function mount() {
        $this->sortGallery();
    }

    public function sortBy($sortBy) {
        $this->sort = $sortBy;
        $this->sortGallery();
    }

    public function sortGallery() {
        if ($this->sort === 'new') {
            $this->gallery = Art::published()->orderBy('publish_date', 'desc')->get();
        } elseif ($this->sort === 'old') {
            $this->gallery = Art::published()->orderBy('publish_date', 'asc')->get();
        } else {
            $this->gallery = Art::published()->latest('publish_date')->get();
        }
    }

    public function render()
    {
        return view('livewire.gallery', [
            'gallery' => $this->gallery
        ]);
    }
}
