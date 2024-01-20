<?php

namespace App\Filament\Resources\ArtResource\Pages;

use App\Filament\Resources\ArtResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditArt extends EditRecord
{
    protected static string $resource = ArtResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
