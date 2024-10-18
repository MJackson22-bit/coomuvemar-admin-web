<?php

namespace App\Filament\Resources\SuppliesMaterialsPurchaseResource\Pages;

use App\Filament\Resources\SuppliesMaterialsPurchaseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSuppliesMaterialsPurchase extends EditRecord
{
    protected static string $resource = SuppliesMaterialsPurchaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
