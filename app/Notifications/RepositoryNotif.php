<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RepositoryNotif extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */

    private $repo;
    public function __construct($repo)
    {
        $this->repo = $repo;
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
        ->greeting(" Admin Created Repository {$this->repo['name']} ")
        ->line("Admin{$this->repo['name']} has successfully submitted a license report category {$this->repo['category']} ")
        ->action('See More', url('/licence-report'))
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
            'area' => $this->repo['name'],
            'pesan' => 'Created',
            'klasifikasi' => $this->repo['category'],
            'time' => now()->toDateTimeString(),
        ];
    }
}
