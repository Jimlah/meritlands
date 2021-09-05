<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
use App\Events\ViewCount;
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

    public function videoIndex()
    {
        $videos = Video::paginate(20);
        return view('video', compact('videos'));
    }
}