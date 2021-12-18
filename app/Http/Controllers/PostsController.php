<?php

namespace App\Http\Controllers;

use App\models\Post;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(4);
        return view('posts.index', compact('posts'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $post = new Post;
        // $post->title = $request->input('title');
        // $post->content = $request->input('content');
        // $post->image = $request->input('image');
        // $post->save();
        
        
        $image_path = Storage::putFile('images', $request->file('image'));
        
        $post = Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => $image_path
        ]);

        dd($image_path);
        
        return redirect('/posts')->with('created', 'Post created succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $post = Post::where('id', $id)->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => Storage::putFile('public/images', $request->file('image'))
        ]);

        return redirect('/posts')->with('updated', 'Post updated successfully');
    }

        
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts')->with('deleted', 'Post deleted successfully');
    }

    /**
     * Move the resource to trash.
     */
    public function softDelete($id) 
    {
        $post = Post::find($id)->delete();
        return redirect('/posts')->with('deleted', 'Post deleted successfully');
    }
    
    /**
     * Show the trashed resources.
     */
    public function showTrash()
    {
        $posts = Post::onlyTrashed()->get();
        return view('posts.trash', compact('posts'));
    }
    
    /**
     * Restore the trashed resources.
     */
    public function restoreTrash($id)
    {
        Post::onlyTrashed()->where('id', $id)->restore();
        return redirect('/posts')->with('restored', 'Post restored successfully');
    }
    
}

// Upload an image
/* $full_path = $request->file('image')->store(config('images.config'), 'public');

$post = Post::create(array_merge(['url_image' => $full_path], $request-exept('name'))); */