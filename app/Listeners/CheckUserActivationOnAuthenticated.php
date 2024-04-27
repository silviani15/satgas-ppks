<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Auth\Events\Authenticated;
use Illuminate\Support\Facades\Auth;

class CheckUserActivationOnAuthenticated
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Authenticated $event): void
    {
        $user = $event->user;

        if ($user->activation_status === 'inactive') {
            Auth::logout();
            session()->flash('error', 'Akun Anda telah dinonaktifkan. Hubungi admin untuk aktivasi kembali.');
        }
    }
}