<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('main.home', ["title" => "Satgas PPKS UKDW",
        "active" => 'Satgas PPKS UKDW',
    ]);
    }

    public function pengantar(){
        return view('main.pengantar', ["title" => "Profil | Pengantar",
        "active" => 'profil',
    ]);
    }

    public function filosofi(){
        return view('main.filosofi', ["title" => "Filosofi Logo",
        "active" => 'profil',
    ]);
    }

    public function struktur(){
        return view('main.struktur', ["title" => "Struktur Organisasi",
        "active" => 'profil',
    ]);
    }

    public function sop(){
        return view('main.sop', ["title" => "SOP",
        "active" => 'profil',
    ]);
    }

    // public function artikel(){

    // $title = ''; 
    // if(request('category')){
    //     $category = category::firstWhere('slug', request('category'));
    //     $title = ' in ' . $category->name;
    // }
    
    // if(request('author')) {
    //     $author = User::firstWhere('username', request('author'));
    //     $title = ' by ' . $author->name;
    // }
        
    //     return view('artikel', ["title" => "All Artikel" . $title,
    //     "active" => 'Artikel Satgas PPKS',
    //     "artikel" => post::latest()->filter(request(['search', 'category', 'author']))->get()
    //     // paginate(7)->withQueryString()
    // ]);
    // }

    // public function show(post $post)
    // {
    //     return view('detailartikel', [
    //         "title" => "Detail Artikel",
    //         "active" => 'Artikel Satgas PPKS',
    //         "artikel" => $post
    //     ]);
    // }
    
    // public function program(){
    //     return view('program', ["title" => "Program Satgas"]);
    // }

    public function program(){
        return view('main.program', ["title" => "Program Satgas",
        "active" => 'Program Satgas',
    ]);
    }

    public function laporkan(){
        return view('form.form1', ["title" => "Laporkan!",
        "active" => 'Laporkan!',
    ]);
    }

    // public function tracking(){
    //     return view('main.tracking', ["title" => "Tracking Aduan",
    //     "active" => 'Tracking Aduan',
    // ]);
    // }

    public function materi(){
        return view('main.materi', ["title" => "Materi Satgas",
        "active" => 'Materi Satgas',
    ]);
    }
    
    public function hubungi(){
        return view('main.hubungi', ["title" => "Hubungi Kami",
        "active" => 'Hubungi Kami',
    ]);
    }

}