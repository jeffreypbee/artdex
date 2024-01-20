<?php

namespace App\Filament\Resources\PokemonResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class ArtRelationManager extends RelationManager
{
    protected static string $relationship = 'art';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                    ->required()
                    ->disk('public')
                    ->directory('art'),
                DatePicker::make('publish_date')
                    ->label('Publish Date')
                    ->closeOnDateSelection()
                    ->unique(ignoreRecord:true)
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('image')
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                TextColumn::make('publish_date')
                    ->date()
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
