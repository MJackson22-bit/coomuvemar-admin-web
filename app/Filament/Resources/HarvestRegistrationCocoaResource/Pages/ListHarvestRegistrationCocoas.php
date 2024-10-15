<?php

namespace App\Filament\Resources\HarvestRegistrationCocoaResource\Pages;

use App\Filament\Resources\HarvestRegistrationCocoaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHarvestRegistrationCocoas extends ListRecords
{
    protected static string $resource = HarvestRegistrationCocoaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
