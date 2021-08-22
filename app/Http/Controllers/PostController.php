<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{

    public function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::withoutGlobalScope('published')->where(function ($query) use ($request) {
            $query->where('title', 'like', '%'.$request->get('q').'%')
                ->orWhere('category', 'like', '%'.$request->get('q').'%');
        })->orderBy('id', 'desc')->paginate(10);

        return view('dashboard.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->slug = Str::slug($request->title);
        $post->user_id = auth()->user()->id;

        if ($request->has('publish')) {
            $post->is_published = true;
            $post->published_at = now();
        }

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::withOutGlobalScope('published')->findOrFail($id);
        return view('dashboard.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::withoutGlobalScope('published')->findOrFail($id);
        return view('dashboard.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
        $post = Post::withoutGlobalScope('published')->findOrFail($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->slug = Str::slug($request->title);

        if ($request->has('publish')) {
            $post->is_published = true;
            $post->published_at = now();
        }

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::withoutGlobalScope('published')->findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post has been deleted');

   }
}