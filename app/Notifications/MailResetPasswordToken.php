<?php

namespace WIT\Notifications;
 
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
 
class MailResetPasswordToken extends Notification
{
    use Queueable;
 
    public $token;
 
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }
 
    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }
 
    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject("Restablecer Contraseña")
                    ->line("Al parecer olvidaste tu contraseña. ¡No te preocupes! Haz click en el botón para restablecerla. ;)")
                    ->action('Restablecer Contraseña', url('password/reset', $this->token))
                    ->line('¡Gracias por usar nuestro sistema!');
    }
 
}
