<?php

namespace App\Filament\Resources\PlantationResource\Pages;

use App\Filament\Resources\PlantationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlantations extends ListRecords
{
    protected static string $resource = PlantationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
