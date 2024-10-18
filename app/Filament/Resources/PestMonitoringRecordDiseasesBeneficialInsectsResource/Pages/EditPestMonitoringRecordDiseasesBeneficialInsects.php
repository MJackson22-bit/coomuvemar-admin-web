<?php

namespace App\Filament\Resources\PestMonitoringRecordDiseasesBeneficialInsectsResource\Pages;

use App\Filament\Resources\PestMonitoringRecordDiseasesBeneficialInsectsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPestMonitoringRecordDiseasesBeneficialInsects extends EditRecord
{
    protected static string $resource = PestMonitoringRecordDiseasesBeneficialInsectsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
