<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HarvestRegistrationCocoaResource\Pages;
use App\Models\HarvestRegistrationCocoa;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class HarvestRegistrationCocoaResource extends Resource
{
    protected static ?string $model = HarvestRegistrationCocoa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $label = 'Registro de Cosechas de Cacao';

    protected static ?string $navigationLabel = 'Registro de Cosechas de Cacao';

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('cantidad_mazorcas')
                    ->label('Cantidad de mazorcas')
                    ->required(),

                TextInput::make('qq_baba_cacao')
                    ->label('QQ de cacao baba')
                    ->required(),

                TextInput::make('precio_qq')
                    ->label('Precio QQ')
                    ->required(),

                DatePicker::make('fecha')
                    ->displayFormat('y-m-d')
                    ->format('y-m-d')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('cantidad_mazorcas')
                    ->label('Cantidad de Mazorcas')
                    ->sortable()
                    ->weight('medium')
                    ->alignLeft(),

                TextColumn::make('qq_baba_cacao')
                    ->label('QQ de cacao baba')
                    ->weight('medium')
                    ->alignLeft(),

                TextColumn::make('precio_qq')
                    ->label('Precio QQ')
                    ->weight('medium')
                    ->alignLeft(),

                TextColumn::make('fecha')
                    ->label('Fecha')
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
            'index' => Pages\ListHarvestRegistrationCocoas::route('/{general_data_id}'),
            'create' => Pages\CreateHarvestRegistrationCocoa::route('/create'),
            'edit' => Pages\EditHarvestRegistrationCocoa::route('/{record}/edit'),
        ];
    }
}
