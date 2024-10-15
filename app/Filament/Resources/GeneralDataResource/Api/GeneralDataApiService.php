<?php
namespace App\Filament\Resources\GeneralDataResource\Api;

use Rupadana\ApiService\ApiService;
use App\Filament\Resources\GeneralDataResource;
use Illuminate\Routing\Router;


class GeneralDataApiService extends ApiService
{
    protected static string | null $resource = GeneralDataResource::class;

    public static function handlers() : array
    {
        return [
            Handlers\CreateHandler::class,
            Handlers\UpdateHandler::class,
            Handlers\DeleteHandler::class,
            Handlers\PaginationHandler::class,
            Handlers\DetailHandler::class
        ];

    }
}
