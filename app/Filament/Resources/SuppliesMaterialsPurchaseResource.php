<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SuppliesMaterialsPurchaseResource\Pages;
use App\Models\SuppliesMaterialsPurchase;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SuppliesMaterialsPurchaseResource extends Resource
{
    protected static ?string $model = SuppliesMaterialsPurchase::class;

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListSuppliesMaterialsPurchases::route('/'),
            'create' => Pages\CreateSuppliesMaterialsPurchase::route('/create'),
            'edit' => Pages\EditSuppliesMaterialsPurchase::route('/{record}/edit'),
        ];
    }
}
