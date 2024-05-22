<?php

namespace App\Livewire;

use Livewire\Component;
use Statamic\Facades\Term;
use Statamic\Facades\Entry;
use Livewire\Attributes\Url;
use Statamic\Entries\EntryCollection;

class Pokedex extends Component
{
    #[Url]
    public $search = '';

    public EntryCollection $pokedex;

    public function mount() {
        $this->pokedex = $this->filterQuery();
    }

    public function filterQuery() {
        return Entry::query()
        ->where('collection', 'pokemon')
        ->where('title', 'like', '%' . $this->search . '%')
        ->orderBy('number')
        ->get();
    }

    public function filterPokedex() {
        $this->pokedex = $this->filterQuery();
    }

    public function updatedSearch() {
        $this->filterPokedex();
    }

    public function getGenerations() {
        return [1, 2, 3, 4, 5, 6, 7, 8, 9];
    }

    public function placeholder() {
        return <<<'HTML'
            <div>Loading...</div>
        HTML;
    }

    public function render()
    {
        return view('livewire.pokedex', [
            'types' => Term::query()->where('taxonomy', 'types')->get(),
            'tags' => Term::query()->where('taxonomy', 'tags')->get(),
            'gens' => $this->getGenerations()
        ]);
    }
}
