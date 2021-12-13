<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PublishPostsController;

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
Route::patch('/posts/{post}/publish', [
    PublishPostsController::class, 'publish'
])->name('posts.publish');
Route::patch('/posts/{post}/unpublish', [
    PublishPostsController::class, 'unpublish'
])->name('posts.unpublish');
Route::delete('/posts/{post}', [PostsController::class, 'destroy'])
    ->name('posts.delete');
