<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Facades\Vonage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SuccessfulRegistration extends Notification implements ShouldQueue
{
    use Queueable;

    public $phone_number;
    public $verification_code;
    public $sender;

    /**
     * Create a new notification instance.
     */
    public function __construct($phone_number,$sender,$verification_code)
    {
        $this->phone_number = $phone_number;
        $this->verification_code = $verification_code;
        $this->sender = $sender;
    
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via($notifiable): array
    {
        return ['vonage'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toVonage(object $notifiable)
    {
      /*   return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!'); */

                    $text = new \Vonage\SMS\Message\SMS($this->phone_number, $this->sender, 'Your one time OTP is'.$this->verification_code);
                    return Vonage::sms()->send($text);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
