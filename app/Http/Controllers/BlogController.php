<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function posts()
    {
        $posts = Post::paginate(5);

        return view('index', compact('posts'));
    }

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('post', compact('post'));
    }
}
