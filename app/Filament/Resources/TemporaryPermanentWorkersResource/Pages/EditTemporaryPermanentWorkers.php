<?php

namespace App\Filament\Resources\TemporaryPermanentWorkersResource\Pages;

use App\Filament\Resources\TemporaryPermanentWorkersResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTemporaryPermanentWorkers extends EditRecord
{
    protected static string $resource = TemporaryPermanentWorkersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
