<?php

class ArtableService
{

    public function getTitle($pokemon): string {

        $pokemonService = new PokemonService;
        if ($pokemonService->isForm($pokemon)) {
            return $pokemon->name . " " . $pokemon->pokemon->name;
        }
        return $pokemon->name;
    }

}
