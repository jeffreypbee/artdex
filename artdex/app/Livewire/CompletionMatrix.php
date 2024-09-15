<?php

namespace App\Livewire;

use App\Models\Generation;
use Livewire\Component;

class CompletionMatrix extends Component
{
    public function render()
    {
        return view('livewire.completion-matrix', [
            'generations' => Generation::all()
        ]);
    }
}
