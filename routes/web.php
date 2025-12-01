<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

Route::get('/', function () {
    return view('welcome');
});


// CRUD
// select all posts
Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');

// select single post
// Route::get('/posts/{id}', [PostsController::class, 'show'])->name('posts.show');

Route::get('/posts/{post}', [PostsController::class, 'show'])->name('posts.show');
