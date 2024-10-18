<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PestMonitoringRecordDiseasesBeneficialInsectsResource\Pages;
use App\Models\PestMonitoringRecordDiseasesBeneficialInsects;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PestMonitoringRecordDiseasesBeneficialInsectsResource extends Resource
{
    protected static ?string $model = PestMonitoringRecordDiseasesBeneficialInsects::class;

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
            'index' => Pages\ListPestMonitoringRecordDiseasesBeneficialInsects::route('/'),
            'create' => Pages\CreatePestMonitoringRecordDiseasesBeneficialInsects::route('/create'),
            'edit' => Pages\EditPestMonitoringRecordDiseasesBeneficialInsects::route('/{record}/edit'),
        ];
    }
}
