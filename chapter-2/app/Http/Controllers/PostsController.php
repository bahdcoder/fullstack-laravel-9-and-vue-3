<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

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
        $tags = Tag::all();
        $categories = Category::all();

        return view('posts.create', [
            'tags' => $tags,
            'categories' => $categories
        ]);
    }

    public function store() {
        $data = request()->all();

        $post = new Post();

        $post->title = $data['title'];
        $post->body = $data['body'];
        $post->slug = $data['title'];
        $post->category_id = $data['category_id'];

        $post->save();

        $tags = Tag::whereIn('id', $data['tags'])->get();

        $post->tags()->attach($tags);

        return redirect()->route('posts.index');
    }

    public function destroy($postId) {
        $post = Post::findOrFail($postId);

        $post->delete();

        return redirect()->route('posts.index');
    }
}
