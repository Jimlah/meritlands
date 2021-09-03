<?php

namespace App\Http\Controllers;

use App\Events\ViewCount;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        $views = Post::orderBy('views', 'desc')->limit(5)->get();
        return view('blog', compact('posts', 'views'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        event(new ViewCount($post));
        return view('show', compact('post'));
    }
}