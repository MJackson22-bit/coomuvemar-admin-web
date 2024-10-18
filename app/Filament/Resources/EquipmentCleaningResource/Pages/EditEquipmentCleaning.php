<?php

namespace App\Filament\Resources\EquipmentCleaningResource\Pages;

use App\Filament\Resources\EquipmentCleaningResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEquipmentCleaning extends EditRecord
{
    protected static string $resource = EquipmentCleaningResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
