<?php

namespace App\Filament\Resources\RenewalRegistrationResource\Pages;

use App\Filament\Resources\RenewalRegistrationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRenewalRegistration extends EditRecord
{
    protected static string $resource = RenewalRegistrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
