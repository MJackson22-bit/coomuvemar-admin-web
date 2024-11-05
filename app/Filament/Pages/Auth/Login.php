<?php

namespace App\Filament\Pages\Auth;

use App\Filament\Resources\GeneralDataResource;
use App\Models\BaseURL;
use App\Models\User;
use DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException;
use Exception;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Forms\Contracts\HasForms;
use Filament\Http\Responses\Auth\LoginResponse;
use Filament\Pages\Auth\Login as BaseLogin;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use function Symfony\Component\String\s;

class Login extends BaseLogin implements HasForms
{

    protected string $userId = '';

    public $username = '';
    public $password = '';
    public $remember = false;

    /**
     * @throws Exception
     */
    public function authenticate(): ?LoginResponse
    {
        try {
            $this->rateLimit(5);
        } catch (TooManyRequestsException $exception) {
            $this->addError('username', __('filament::login.messages.throttled', [
                'seconds' => $exception->secondsUntilAvailable,
                'minutes' => ceil($exception->secondsUntilAvailable / 60),
            ]));

            return null;
        }

        $data = $this->form->getState();

        session_start();
        session_commit();

        $isLogin = $this->getCredentialsFromFormData($data);
        if (empty($isLogin)) {
            $this->addError('username', __('filament::login.messages.failed'));

            return null;
        }

        return app(\App\Http\Responses\LoginResponse::class);
    }

    /**
     * @throws Exception
     */
    protected function getCredentialsFromFormData(array $data): array
    {
        $url = BaseURL::$BASE_URL . 'auth/login';
        $response = Http::post(
            url: $url,
            data: $data
        )->json();
        if ($response['status'] === false) {
            throw new Exception("Failed to sign in: " . $response['message']);
        }
        $userExists = User::query()->where('email', $response['data']['email'])->exists();
        if (!$userExists) {
            User::query()->create([
                'email' => $response['data']['email'],
                'name' => $response['data']['email'],
                'password' => Hash::make($data['password']),
            ]);
        }
        return $data;
    }

    protected function getAuthenticateFormAction(): Action
    {
        return parent::getAuthenticateFormAction()
            ->label('Iniciar Sesion');
    }

    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getEmailFormComponent()
                        ->label('Correo Electronico'),
                        $this->getPasswordFormComponent()
                            ->label('Contraseña'),
                        $this->getRememberFormComponent()
                            ->label('Recuerdame'),
                    ])
                    ->statePath('data'),
            ),
        ];
    }
}
