<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/posts', [PostsController::class, 'index'])
    ->name('posts.index');
Route::post('/posts', [PostsController::class, 'store'])
    ->name('posts.store');
Route::get('/posts/create', [PostsController::class, 'create'])
    ->name('posts.create');
Route::get('/posts/{slug}', [PostsController::class, 'show'])
    ->name('posts.show');
