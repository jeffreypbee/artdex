<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\PokemonForm;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PokemonFormResource\Pages;
use App\Filament\Resources\PokemonFormResource\RelationManagers;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\ToggleColumn;

class PokemonFormResource extends Resource
{
    protected static ?string $model = PokemonForm::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Pokedex';

    protected static ?string $navigationParentItem = 'Pokemon';

    protected static ?string $modelLabel = 'Form';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Basic Info')->schema([
                    Select::make('pokemon_id')->relationship('pokemon', 'name')->required()->searchable(),
                    TextInput::make('name')->label('Form Name')->required(),
                    Toggle::make('default')
                ])->columnSpan(1)->columns(2),
                Section::make('Types')->schema([
                    Select::make('type1_id')
                        ->label('Type 1')
                        ->relationship('type1', 'name')
                        ->required(),
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
                TextColumn::make('name'),
                TextColumn::make('pokemon.name'),
                ToggleColumn::make('default')
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
            PokemonFormResource\RelationManagers\ArtRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPokemonForms::route('/'),
            'create' => Pages\CreatePokemonForm::route('/create'),
            'edit' => Pages\EditPokemonForm::route('/{record}/edit'),
        ];
    }
}
