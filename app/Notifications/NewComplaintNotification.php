<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification; 
use NotificationChannels\Fcm\FcmChannel;
use NotificationChannels\Fcm\FcmMessage;
use App\Models\Pengaduan;

class NewComplaintNotification extends Notification
{
    protected $pengaduan;

    public function __construct(Pengaduan $pengaduan)
    {
        $this->pengaduan = $pengaduan; 
    }

    public function via($notifiable)  
    {
        return [FcmChannel::class]; 
    }

    public function toFcm($notifiable)
    {
        return (new FcmMessage())
            ->content([
                'title' => 'Satgas PPKS UKDW',
                'body' => 'Ada Laporan Pengaduan masuk nichh',
            ])
            ->data([
                'id' => $this->pengaduan->id,
            ]);
    }
}