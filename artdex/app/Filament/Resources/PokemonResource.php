<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Pokemon;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Fieldset;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PokemonResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PokemonResource\RelationManagers;
use Filament\Forms\Components\Section;

class PokemonResource extends Resource
{
    protected static ?string $model = Pokemon::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Pokedex';

    protected static ?string $modelLabel = 'Pokemon';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Basic Info')->schema([
                    TextInput::make('name')->required()->maxLength(255)->unique(ignoreRecord:true)->columnSpan(2),
                    Select::make('generation_id')->relationship('generation', 'generation')->required(),
                    TextInput::make('number')->numeric()->minValue(0)->unique(ignoreRecord:true)->required(),
                ])->columnSpan(1)->columns(2),
                Section::make('Types')->schema([
                    Select::make('type1_id')
                        ->label('Type 1')
                        ->relationship('type1', 'name'),
                    Select::make('type2_id')
                        ->label('Type 2')
                        ->relationship('type2', 'name')
                ])->columnSpan(1)->columns(2)
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('number'),
                TextColumn::make('name'),
                TextColumn::make('generation.generation'),
                TextColumn::make('type1.name')->label('Type 1'),
                TextColumn::make('type2.name')->label('Type 2'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            PokemonResource\RelationManagers\FormsRelationManager::class,
            PokemonResource\RelationManagers\ArtRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPokemon::route('/'),
            'create' => Pages\CreatePokemon::route('/create'),
            'edit' => Pages\EditPokemon::route('/{record}/edit'),
        ];
    }
}
