<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::query()->orderByDesc('created_at')->limit(3)->get();
        $categories = Post::query()->select('category')->distinct()->get();
        return view('welcome', compact('posts', 'categories'));
    }
}
