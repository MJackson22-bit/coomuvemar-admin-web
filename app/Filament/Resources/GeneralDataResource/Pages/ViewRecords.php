<?php

namespace App\Filament\Resources\GeneralDataResource\Pages;

use App\Filament\Resources\GeneralDataResource;
use App\Filament\Resources\GeneralDataResource\Widgets\RecordWidget;
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
        return 2;
    }

    protected function getHeaderWidgets(): array
    {
        return [
            RecordWidget::make(
                properties: [
                    'title' => 'Cosechas de cacao',
                ]
            ),
            RecordWidget::make(
                properties: [
                    'title' => 'Plantación',
                ]
            ),
            RecordWidget::make(
                properties: [
                    'title' => 'Renovación o mejora genética',
                ]
            ),
            RecordWidget::make(
                properties: [
                    'title' => 'Limpieza de equipos',
                ]
            ),
            RecordWidget::make(
                properties: [
                    'title' => 'Compra de insumos y materiales',
                ]
            ),
            RecordWidget::make(
                properties: [
                    'title' => 'Actividades de manejo integrado de plagas en la finca',
                ]
            ),
            RecordWidget::make(
                properties: [
                    'title' => 'Monitoreo de plagas, enfermedades e insectos benéfico',
                ]
            ),
            RecordWidget::make(
                properties: [
                    'title' => 'Trabajadores temporales y permanentes',
                ]
            )
        ];
    }
}
