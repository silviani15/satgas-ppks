<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Mail;

class OtpService
{
    public function sendOtp($email)
    {
        // Generate OTP
        $otp = mt_rand(100000, 999999);

        // Send email with OTP
        Mail::send('emails.otp', ['otp' => $otp], function ($message) use ($email) {
            $message->to($email)->subject('Your OTP');
        });

        // Store OTP in cache or database for verification later

        return $otp;
    }
}