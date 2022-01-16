<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPasswordNotification extends Notification
{
    use Queueable;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Recuperação de Senha - ' . config('app.name'))
            ->markdown(
                'emails.auth.reset_password',
                ['name' => $notifiable['name'], 'url' => route('password.reset', $this->token)]
            );
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
