<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LicenceReport extends Notification
{
    use Queueable;

    private $licence;

    /**
     * Create a new notification instance.
     */
    public function __construct($licence)
    {
        $this->licence = $licence;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array
     */
    public function via(object $notifiable): array
    {
        return ['database','mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @return MailMessage
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
        ->greeting("{$this->licence['area']} Created licence report")
        ->line("{$this->licence['tipe_bisnis']}  {$this->licence['area']} has successfully submitted a license report with classification {$this->licence['klasifikasi']} ")
        ->action('Notification Action', url('/licence-report'))
        ->line('Thank you for using our application!');
    }
    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray(object $notifiable): array
    {
        return [
            'area' => $this->licence['area'],
            'pesan' => 'Created',
            'klasifikasi' => $this->licence['klasifikasi'],
            'time' => now()->toDateTimeString(),
        ];
    }
}
