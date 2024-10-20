<?php

namespace App\Filament\Resources\GeneralDataResource\Pages;

use App\Filament\Resources\EquipmentCleaningResource;
use App\Filament\Resources\GeneralDataResource;
use App\Filament\Resources\GeneralDataResource\Widgets\RecordWidget;
use App\Filament\Resources\HarvestRegistrationCocoaResource;
use App\Filament\Resources\IntegratedPestManagementActivitiesResource;
use App\Filament\Resources\PestMonitoringRecordDiseasesBeneficialInsectsResource;
use App\Filament\Resources\PlantationResource;
use App\Filament\Resources\RenewalRegistrationResource;
use App\Filament\Resources\SuppliesMaterialsPurchaseResource;
use App\Filament\Resources\TemporaryPermanentWorkersResource;
use Filament\Resources\Pages\Page;
use Illuminate\Contracts\View\View;

class ViewRecords extends Page
{
    protected static string $resource = GeneralDataResource::class;

    protected static ?string $title = 'Registros';

    protected static string $view = 'filament.resources.general-data-resource.pages.records';

    private int $generalDataId;

    public function getHeaderWidgetsColumns(): int|string|array
    {
        return 2;
    }

    public function render(): View
    {
        $this->generalDataId = request('record');
        return parent::render();
    }

    protected function getHeaderWidgets(): array
    {
        return [
            RecordWidget::make(
                properties: [
                    'title' => 'Cosechas de cacao',
                    'action' => HarvestRegistrationCocoaResource::getUrl(
                        parameters: [
                            'general_data_id' => $this->generalDataId,
                        ]
                    )
                ]
            ),
            RecordWidget::make(
                properties: [
                    'title' => 'Poda de formación o mantenimiento',
                    'action' => PlantationResource::getUrl(
                        parameters: [
                            'general_data_id' => $this->generalDataId,
                        ]
                    )
                ]
            ),
            RecordWidget::make(
                properties: [
                    'title' => 'Renovación o mejora genética',
                    'action' => RenewalRegistrationResource::getUrl(
                        parameters: [
                            'general_data_id' => $this->generalDataId,
                        ]
                    )
                ]
            ),
            RecordWidget::make(
                properties: [
                    'title' => 'Limpieza de equipos',
                    'action' => EquipmentCleaningResource::getUrl(
                        parameters: [
                            'general_data_id' => $this->generalDataId,
                        ]
                    )
                ]
            ),
            RecordWidget::make(
                properties: [
                    'title' => 'Compra de insumos y materiales',
                    'action' => SuppliesMaterialsPurchaseResource::getUrl(
                        parameters: [
                            'general_data_id' => $this->generalDataId,
                        ]
                    )
                ]
            ),
            RecordWidget::make(
                properties: [
                    'title' => 'Actividades de manejo integrado de plagas en la finca',
                    'action' => IntegratedPestManagementActivitiesResource::getUrl(
                        parameters: [
                            'general_data_id' => $this->generalDataId,
                        ]
                    )
                ]
            ),
            RecordWidget::make(
                properties: [
                    'title' => 'Monitoreo de plagas, enfermedades e insectos benéfico',
                    'action' => PestMonitoringRecordDiseasesBeneficialInsectsResource::getUrl(
                        parameters: [
                            'general_data_id' => $this->generalDataId,
                        ]
                    )
                ]
            ),
            RecordWidget::make(
                properties: [
                    'title' => 'Trabajadores temporales y permanentes',
                    'action' => TemporaryPermanentWorkersResource::getUrl(
                        parameters: [
                            'general_data_id' => $this->generalDataId,
                        ]
                    )
                ]
            )
        ];
    }
}
