<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

        VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
            $temporaryPassword = Str::random(12);

            $notifiable->update([
                'password' => bcrypt($temporaryPassword),
            ]);

            return (new MailMessage)
            ->subject('Verificación de tu correo electrónico')
            ->greeting('¡Hola, ' . ucfirst($notifiable->name) . ' ' . ucfirst($notifiable->last_name) . '!')
            ->line('Para completar tu registro, por favor verifica tu dirección de correo electrónico haciendo clic en el botón a continuación.')
            ->line('Aquí tienes tus datos de acceso:')
            ->line('**Nombre de usuario:** ' . $notifiable->username)
            ->line('**Contraseña temporal:** ' . $temporaryPassword)
            ->line('Por motivos de seguridad, asegúrate de actualizar tu contraseña después de iniciar sesión.')
            ->action('Verificar mi correo electrónico', $url)
            ->line('Si no creaste esta cuenta, por favor ignora este mensaje o ponte en contacto con nuestro equipo de soporte.')
            ->salutation('Saludos cordiales,')
            ->salutation(config('app.name'));        
        });
        
    }
}
