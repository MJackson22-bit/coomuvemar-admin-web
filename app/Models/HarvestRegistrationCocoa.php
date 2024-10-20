<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Sushi\Sushi;
use Throwable;

class HarvestRegistrationCocoa extends Model
{
    use HasFactory;

    use Sushi;

    protected static string $general_data_id;

    public static function setGeneralDataId($value): void
    {
        self::$general_data_id = $value;
    }

    public function getRows(): array
    {
        try {
            $response = Http::get(BaseURL::$BASE_URL . "cocoa-harvest-registration/" . self::$general_data_id)->json();

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
        } catch (Throwable) {
            return [];
        }
    }
}
