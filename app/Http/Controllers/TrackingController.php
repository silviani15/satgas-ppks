<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackingController extends Controller
{
    
    public function trackingAduan()
{
    // Di sini Anda dapat melakukan logika untuk menampilkan informasi tracking aduan
    return view('main.tracking', ["title" => "Tracking Aduan",
    "active" => 'Tracking Aduan',
]);
}

}