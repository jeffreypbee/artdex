<?php

namespace App\Services;

use App\Models\PokemonForm;

class PokemonService
{

    public function isForm($pokemon): bool {

        return $pokemon instanceof PokemonForm;
    }

}
