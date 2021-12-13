<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PublishPostsController extends Controller
{
    public function publish($postId) {
        $post = Post::findOrFail($postId);

        $post->published_at = now();
        $post->save();

        return redirect()->route('posts.index');
    }

    public function unpublish($postId) {
        $post = Post::findOrFail($postId);

        $post->published_at = null;
        $post->save();

        return redirect()->route('posts.index');
    }
}
