<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {

        $posts = Post::latest()->get();

        return view('index', compact('posts'));
    }

    public function store(Request $request)
    {
        $post = $request->all();

        Post::create([
            'title' => $post['title'],
            'slug' => str_replace(' ', '-', $post['title']),
            'body' => $post['body'],
        ]);

        return redirect('/');

    }

    public function show($id)
    {

        $post = Post::where('id', $id)->firstOrFail();

        return view('post', ['post' => $post]);
    }
}
