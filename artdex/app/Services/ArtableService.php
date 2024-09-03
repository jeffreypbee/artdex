<?php

namespace App\Services;

use App\Services\PokemonService;

class ArtableService
{

    public function getTitle($pokemon): string {
        if ($this->isForm($pokemon)) {
            return $pokemon->name . " " . $pokemon->pokemon->name;
        }
        return $pokemon->name;
    }

    public function isForm($pokemon): bool {
        $pokemonService = new PokemonService;
        return $pokemonService->isForm($pokemon);
    }

}
