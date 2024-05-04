<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.artikel.index', [
            'artikel' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.artikel.create', [
            'categories' => category::all()
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ddd($request);
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::create($validatedData);

        return redirect('/dashboard/artikel')->with('success', 'New Artikel has been added!');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Post $artikel)
    {
        return view('dashboard.artikel.show', [
            'artikel' => $artikel
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $artikel)
    {
        return view('dashboard.artikel.edit', [
            'artikel' => $artikel,
            'categories' => category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $artikel)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];

        if($request->slug != $artikel->slug){
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::where('id', $artikel->id)->update($validatedData);

        return redirect('/dashboard/artikel')->with('success', 'Artikel has been updated!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $artikel)
    {
        if($artikel->image){
            Storage::delete($artikel->image);
        }
        Post::destroy($artikel->id);

        return redirect('/dashboard/artikel')->with('danger', 'Artikel has been deleted!');
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);

    }
}