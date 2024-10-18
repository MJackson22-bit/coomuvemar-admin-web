<?php

namespace App\Filament\Resources\SuppliesMaterialsPurchaseResource\Pages;

use App\Filament\Resources\SuppliesMaterialsPurchaseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuppliesMaterialsPurchases extends ListRecords
{
    protected static string $resource = SuppliesMaterialsPurchaseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
