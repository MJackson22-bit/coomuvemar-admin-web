<?php

namespace App\Filament\Resources\GeneralDataResource\Pages;

use App\Filament\Resources\GeneralDataResource;
use App\Filament\Resources\GeneralDataResource\Widgets\HarvestCocoaRecordWidget;
use Filament\Forms\Components\Section;
use Filament\Resources\Pages\Page;
use Filament\Widgets\StatsOverviewWidget;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;

class ViewRecords extends Page
{
    protected static string $resource = GeneralDataResource::class;

    protected static ?string $title = 'Registros';

    protected static string $view = 'filament.resources.general-data-resource.pages.records';

    public int $generalDataId;

    public function getHeaderWidgetsColumns(): int|string|array
    {
        return 3;
    }

    protected function getHeaderWidgets(): array
    {
        return [
            HarvestCocoaRecordWidget::make(
                properties: [
                    'title' => 'Cosechas de cacao',
                ]
            ),
            HarvestCocoaRecordWidget::make(
                properties: [
                    'title' => 'Plantación',
                ]
            ),
            HarvestCocoaRecordWidget::make(
                properties: [
                    'title' => 'Renovación o mejora genética',
                ]
            ),
            HarvestCocoaRecordWidget::make(
                properties: [
                    'title' => 'Limpieza de equipos',
                ]
            ),
            HarvestCocoaRecordWidget::make(
                properties: [
                    'title' => 'Compra de insumos y materiales',
                ]
            ),
            HarvestCocoaRecordWidget::make(
                properties: [
                    'title' => 'Actividades de manejo integrado de plagas en la finca',
                ]
            ),
            HarvestCocoaRecordWidget::make(
                properties: [
                    'title' => 'Monitoreo de plagas, enfermedades e insectos benéfico',
                ]
            ),
            HarvestCocoaRecordWidget::make(
                properties: [
                    'title' => 'Trabajadores temporales y permanentes',
                ]
            )
        ];
    }
}
