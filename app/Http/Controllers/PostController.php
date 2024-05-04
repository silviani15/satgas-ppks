<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   
    public function artikel() 
    {
        // $artikel = Post::latest();
    
        // if(request('search')) {
        //     $artikel->where('title', 'like', '%' . request('search') . '%');
        // }
        $artikel = Post::latest();

        // Mengecek jika ada query 'search' pada request
        if (request('search')) {
            // Mendapatkan nilai pencarian dan mengubah ke huruf kecil
            $search = strtolower(request('search'));

            // Menambahkan kondisi pencarian yang case-insensitive
            $artikel->whereRaw('LOWER(title) LIKE ?', ['%' . $search . '%']);
        }
        
        return view('main.artikel', [
            "title" => "Artikel Satgas PPKS",
            "active" => 'Artikel Satgas PPKS',
            // "artikel" => Post::all()
            "artikel" => $artikel->get()
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