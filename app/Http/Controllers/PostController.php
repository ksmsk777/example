<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('post.index', compact('posts'));

    }

    public function create()
    {
        return view('post.create');
    }

    public function delete()
    {
        $post = Post::find(3);
        $post->delete();
        dd('deleted_soft_now');
    }

    public function update(Post $post)
    {


        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',


        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }


    public function show(Post $post)
    {
        return view('post.show', compact('post'));

    }


    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));

    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }


}

