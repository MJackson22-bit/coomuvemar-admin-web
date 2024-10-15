<?php

namespace App\Filament\Resources\GeneralDataResource\Pages;

use App\Filament\Resources\GeneralDataResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateGeneralData extends CreateRecord
{
    protected static string $resource = GeneralDataResource::class;

    protected static ?string $title = "Datos Generales";

    protected function getCancelFormAction(): Action
    {
        return parent::getCancelFormAction()
            ->label('Cancelar');
    }

    protected function getCreateAnotherFormAction(): Action
    {
        return parent::getCreateAnotherFormAction()
            ->label('Your text');
    }

    protected function getCreateFormAction(): Action
    {
        return parent::getCreateFormAction()
            ->label('Crear Registro');
    }
}
