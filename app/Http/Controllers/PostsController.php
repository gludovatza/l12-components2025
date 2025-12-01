<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    // function index() {
    //     return Post::all();
    // }

    function index() {
        return view('posts.index', [
            'posts' => Post::all()
        ]);
    }

    // function show($id) {
    //     return Post::findOrFail($id);
    // }

    // function show(Post $post) {
    //     return $post;
    // }

    function show(Post $post) {
        // return view('posts.show', [
        //     'post' => $post
        // ]);
        // vagy rövidebben:
        return view('posts.show', compact('post'));
    }
}
