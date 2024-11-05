<?php

namespace App\Filament\Pages\Auth;

use App\Models\BaseURL;
use App\Models\GeneralData;
use App\Models\User;
use Exception;
use Filament\Actions\Action;
use Filament\Pages\Page;

use Filament\Pages\Auth\Register as BaseRegister;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Register extends BaseRegister
{

    public function getRegisterFormAction(): Action
    {
        return parent::getRegisterFormAction()
            ->label('Registrarse');
    }

    /**
     * @throws Exception
     */
    protected function handleRegistration(array $data): Model
    {
        $url = BaseURL::$BASE_URL . 'auth/register';
        $response = Http::post(
            url: $url,
            data: $data
        )->json();
        if ($response['status'] === false) {
            throw new Exception("Failed to create user: " . $response['message']);
        }
        return new User(
            attributes: $response['data']
        );
    }

    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getNameFormComponent()
                            ->label('Nombre de usuario'),
                        $this->getEmailFormComponent()
                            ->label('Correo electronico'),
                        $this->getPasswordFormComponent()
                            ->label('Contraseña'),
                        $this->getPasswordConfirmationFormComponent()
                            ->label('Confirma tu contraseña'),
                    ])
                    ->statePath('data'),
            ),
        ];
    }
}
