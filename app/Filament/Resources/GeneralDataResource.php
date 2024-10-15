<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GeneralDataResource\Pages;
use App\Models\GeneralData;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class GeneralDataResource extends Resource
{
    protected static ?string $model = GeneralData::class;

    protected static ?string $label = 'Datos Generales';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Datos Generales';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nombre_productor'),
                TextInput::make('codigo'),
                TextInput::make('numero_cedula'),
                TextInput::make('nombre_finca'),
                TextInput::make('altura_nivel_mar'),
                TextInput::make('ciclo_productivo'),
                TextInput::make('coordenadas_area_cacao'),
                TextInput::make('area_total_finca'),
                TextInput::make('departamento'),
                TextInput::make('municipio'),
                TextInput::make('comunidad'),
                TextInput::make('area_cacao'),
                TextInput::make('produccion'),
                TextInput::make('desarrollo'),
                TextInput::make('variedades_cacao')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nombre_productor')
                    ->searchable()
                    ->sortable()
                    ->weight('medium')
                    ->alignLeft(),

                TextColumn::make('codigo')
                    ->searchable()
                    ->weight('medium')
                    ->alignLeft(),

                TextColumn::make('numero_cedula')
                    ->weight('medium')
                    ->alignLeft(),

                TextColumn::make('nombre_finca')
                    ->weight('medium')
                    ->alignLeft(),

                TextColumn::make('departamento')
                    ->weight('medium')
                    ->alignLeft(),

                TextColumn::make('municipio')
                    ->weight('medium')
                    ->alignLeft(),

                TextColumn::make('comunidad')
                    ->weight('medium')
                    ->alignLeft(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                ->label('Editar'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->label('Eliminar seleccionados'),
                ])->label('Acciones masivas'),
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
            'index' => Pages\ListGeneralData::route('/'),
            'create' => Pages\CreateGeneralData::route('/create'),
            'edit' => Pages\EditGeneralData::route('/{record}/edit'),
        ];
    }
}
