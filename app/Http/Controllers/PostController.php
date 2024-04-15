<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function artikel() 
    {
        return view('main.artikel', [
            "title" => "Artikel Satgas PPKS",
            "active" => 'Artikel Satgas PPKS',
            // "artikel" => Post::all()
            "artikel" => Post::latest()->get()
        ]);
    }
    
    public function show(Post $detailartikel) 
    {
        return view('main.detailartikel', [
            "title" => "Detail Artikel",
            "active" => 'Artikel Satgas PPKS',
            "artikel" => $detailartikel
        ]);
    }
}