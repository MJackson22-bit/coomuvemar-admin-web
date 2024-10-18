<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TemporaryPermanentWorkersResource\Pages;
use App\Models\TemporaryPermanentWorkers;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TemporaryPermanentWorkersResource extends Resource
{
    protected static ?string $model = TemporaryPermanentWorkers::class;

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
            'index' => Pages\ListTemporaryPermanentWorkers::route('/'),
            'create' => Pages\CreateTemporaryPermanentWorkers::route('/create'),
            'edit' => Pages\EditTemporaryPermanentWorkers::route('/{record}/edit'),
        ];
    }
}
