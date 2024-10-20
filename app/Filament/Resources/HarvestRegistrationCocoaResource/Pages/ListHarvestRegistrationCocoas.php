<?php

namespace App\Filament\Resources\HarvestRegistrationCocoaResource\Pages;

use App\Filament\Resources\HarvestRegistrationCocoaResource;
use App\Models\HarvestRegistrationCocoa;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;

class ListHarvestRegistrationCocoas extends ListRecords
{
    protected static string $resource = HarvestRegistrationCocoaResource::class;

    protected static ?string $title = 'Registro de Cosechas de Cacao';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
            ->label('Crear Registro'),
        ];
    }
}
