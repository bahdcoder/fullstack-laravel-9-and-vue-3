<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::all();

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show($slug) {
        $post = Post::query()->where('slug', $slug)->firstOrFail();

        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {
        $data = request()->all();

        $post = new Post();

        $post->title = $data['title'];
        $post->body = $data['body'];
        $post->slug = $data['title'];

        $post->save();

        return redirect()->route('posts.index');
    }
}
