<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Sushi\Sushi;

class HarvestRegistrationCocoa extends Model
{
    use HasFactory;

    use Sushi;

    public function getRows(): array
    {
        $response = Http::get(BaseURL::$BASE_URL . "cocoa-harvest-registration/8")->json();

        return Arr::map($response['data'], function ($item) {
            return Arr::only($item,
                [
                    'id',
                    'fecha',
                    'cantidad_mazorcas',
                    'qq_baba_cacao',
                    'precio_qq',
                    'general_data_id',
                    'created_at',
                    'updated_at',
                ]
            );
        });
    }
}
