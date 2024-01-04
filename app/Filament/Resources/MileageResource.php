<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MileageResource\Pages;
use App\Filament\Resources\MileageResource\RelationManagers;
use App\Models\Mileage;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class MileageResource extends Resource
{
    protected static ?string $model = Mileage::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('date'),
                TextInput::make('inital_km'),
                TextInput::make('rided_km'),
                TextInput::make('fuel_filled')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('inital_km'),
                TextColumn::make('rided_km'),
                TextColumn::make('fuel_filled'),
                TextColumn::make('km')->label('Mileage Per Liter')->suffix(' km')
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
            'index' => Pages\ListMileages::route('/'),
            'create' => Pages\CreateMileage::route('/create'),
            'edit' => Pages\EditMileage::route('/{record}/edit'),
        ];
    }
}
