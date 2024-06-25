<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Approve extends Notification
{
    use Queueable;
    private $approve;
    /**
     * Create a new notification instance.
     */
    public function __construct($approve)
    {
        $this->approve = $approve;
    }


    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database','mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
        ->greeting("Admin has approved the license report {$this->approve['area']}")
        ->line("{$this->approve['tipe_bisnis']}  {$this->approve['area']} has successfully Approve license report with classification {$this->approve['klasifikasi']} ")
        ->line("comment : {$this->approve['comment']}")
        ->action('Notification Action', url('/licence-report'))
        ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {

        return [
            'area' => $this->approve['area'],
            'pesan' => 'Approve',
            'klasifikasi' => $this->approve['klasifikasi'],
            'time' => now()->toDateTimeString(),
        ];
    }
}
