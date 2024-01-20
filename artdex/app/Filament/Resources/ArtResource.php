<?php

namespace App\Filament\Resources;

use App\Models\Art;
use Filament\Forms;
use Filament\Tables;
use App\Models\Pokemon;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\PokemonForm;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\MorphToSelect;
use App\Filament\Resources\ArtResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ArtResource\RelationManagers;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;

class ArtResource extends Resource
{
    protected static ?string $model = Art::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('image')
                    ->required()
                    ->disk('public')
                    ->directory('art')
                    ->columnSpanFull(),
                MorphToSelect::make('artable')
                    ->types([
                        MorphToSelect\Type::make(Pokemon::class)
                            ->titleAttribute('name'),
                        MorphToSelect\Type::make(PokemonForm::class)
                            ->label('Form')
                            ->getOptionLabelFromRecordUsing(fn ($record): string => "{$record->name} {$record->pokemon->name}")
                    ])
                    ->required(),
                DatePicker::make('publish_date')
                    ->label('Publish Date')
                    ->closeOnDateSelection()
                    ->unique(ignoreRecord:true)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArt::route('/'),
            'create' => Pages\CreateArt::route('/create'),
            'edit' => Pages\EditArt::route('/{record}/edit'),
        ];
    }
}
