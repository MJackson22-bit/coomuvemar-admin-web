<?php

namespace App\Filament\Resources\RenewalRegistrationResource\Pages;

use App\Filament\Resources\RenewalRegistrationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRenewalRegistrations extends ListRecords
{
    protected static string $resource = RenewalRegistrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
