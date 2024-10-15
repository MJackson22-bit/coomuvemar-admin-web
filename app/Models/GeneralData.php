<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Sushi\Sushi;

class GeneralData extends Model
{
    use HasFactory;

    use Sushi;

    public function getRows(): array
    {
        $generalData = Http::get(BaseURL::$BASE_URL . "general-data/1")->json();

        return Arr::map($generalData['data'], function ($item) {
            return Arr::only($item,
                [
                    'id',
                    'nombre_productor',
                    'codigo',
                    'numero_cedula',
                    'nombre_finca',
                    'altura_nivel_mar',
                    'ciclo_productivo',
                    'departamento',
                    'municipio',
                    'comunidad',
                    'coordenadas_area_cacao',
                    'area_total_finca',
                    'area_cacao',
                    'produccion',
                    'desarrollo',
                    'variedades_cacao'
                ]
            );
        });
    }
}
