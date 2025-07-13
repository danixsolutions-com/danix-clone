<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;


class ContactMessageNotification extends Notification
{
    protected $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('New Contact Message')
            ->line("Name: {$this->message->name}")
            ->line("Email: {$this->message->email}")
            ->line("Subject: {$this->message->subject}")
            ->line("Message: {$this->message->message}")
            ->line('Thank you for reaching out!');
    }
}

