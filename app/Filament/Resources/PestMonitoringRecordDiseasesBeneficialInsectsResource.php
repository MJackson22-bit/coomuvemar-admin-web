<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PestMonitoringRecordDiseasesBeneficialInsectsResource\Pages;
use App\Models\HarvestRegistrationCocoa;
use App\Models\PestMonitoringRecordDiseasesBeneficialInsects;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class PestMonitoringRecordDiseasesBeneficialInsectsResource extends Resource
{
    protected static ?string $model = PestMonitoringRecordDiseasesBeneficialInsects::class;

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nombre_plaga_enfermedad')
                    ->label('Nombre de la plaga o enfermedad')
                    ->required(),

                DatePicker::make('fecha_monitoreo')
                    ->label('Fecha de monitoreo')
                    ->displayFormat('y-m-d')
                    ->format('y-m-d')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        PestMonitoringRecordDiseasesBeneficialInsects::setGeneralDataId(request('general_data_id'));
        return $table
            ->paginated(false)
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->url(fn() => static::getUrl(
                        'create',
                        [
                            'general_data_id' => request('general_data_id')
                        ]
                    ))
                    ->label('Crear Registro'),
            ])
            ->columns([
                TextColumn::make('fecha_monitoreo')
                    ->label('Fecha de monitoreo')
                    ->sortable()
                    ->weight('medium')
                    ->alignLeft(),

                TextColumn::make('nombre_plaga_enfermedad')
                    ->label('Nombre de la plaga o enfermedad')
                    ->weight('medium')
                    ->alignLeft(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->url(function (Model $record): string {
                        return static::getUrl(
                            'edit',
                            [
                                'record' => $record['id'],
                                'general_data_id' => request('general_data_id')
                            ]
                        );
                    })
                    ->label('Editar'),
            ])
            ->bulkActions([
                //
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
            'create' => Pages\CreatePestMonitoringRecordDiseasesBeneficialInsects::route('/create/{general_data_id}'),
            'edit' => Pages\EditPestMonitoringRecordDiseasesBeneficialInsects::route('/{record}/edit/{general_data_id}'),
        ];
    }
}
