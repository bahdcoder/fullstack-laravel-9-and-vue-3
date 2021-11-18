<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
        return view('posts.index');
    }

    public function show($slug) {
        return view('posts.show');
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {
        return redirect()->route('posts.index');
    }
}
