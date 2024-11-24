<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posty = Post::all();
        return view('post.list',compact('posty'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.dodaj');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->tytul = $request['tytul'];
        $post->autor = request('autor');
        $post->email = request('email');
        $post->tresc = request('tresc');
        $post->save();
        return redirect()->route('post.index')->with('message','Dodano poprawnie post');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('post.pokaz', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return "edit $post";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        return "update request: $request, id: $post";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        return "destroy $post";
    }
}