<?php

namespace App\Filament\Resources\ArtResource\Pages;

use App\Filament\Resources\ArtResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListArt extends ListRecords
{
    protected static string $resource = ArtResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
