<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TanggapanNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $status_laporan;
    public $tanggapan;
    public $kode_tracking; // tambahkan properti kode_tracking

    /**
     * Create a new message instance.
     */
    public function __construct($status_laporan, $tanggapan, $kode_tracking)
    {
        $this->status_laporan = $status_laporan;
        $this->tanggapan = $tanggapan;
        $this->kode_tracking = $kode_tracking; // inisialisasi properti kode_tracking
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Notifikasi Tanggapan Pengaduan: ' . $this->kode_tracking)
                    ->view('emails.tanggapan_notification');
    }
}