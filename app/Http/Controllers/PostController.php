<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
        
        $posts = post::all();
        return view('posts.index', compact('posts'));
    }

  
    public function create()
    {
        // $post = Post::find($id);
        return view('posts.create');
    }

  
    public function store(Request $request)
    {
        $post = new Post();
        $post->name = request('name');
        $post->save();
        return redirect('/posts');
    }

   
    public function show(post $post)
    {
       // 
    }

  
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

 
    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return redirect()->route('posts.index');
    }

  
    public function destroy(Post $post)
    {
       $post->delete();
       return redirect()->route('posts.index');
    }
}
