<?php

namespace App\Filament\Resources\GeneralDataResource\Widgets;

use Filament\Widgets\Widget;

class HarvestCocoaRecordWidget extends Widget
{
    protected static string $view = 'filament.resources.general-data-resource.widgets.harvest-cocoa-record-widget';

    public string $title;

    protected function getViewData(): array
    {
        return [
            'title' => $this->title,
        ];
    }
}
