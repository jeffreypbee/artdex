<?php

namespace App\Filament\Resources\PokemonFormResource\Pages;

use App\Filament\Resources\PokemonFormResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPokemonForms extends ListRecords
{
    protected static string $resource = PokemonFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
