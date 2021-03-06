<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
use GuzzleHttp\Psr7\Uri;
use App\Events\ViewCount;
use Illuminate\Http\Request;
use RicardoFiorani\OEmbed\OEmbed;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::query()
            ->when($request->get('filter'), function ($query) use ($request) {
                $query->where('category', $request->get('filter'));
            })
        ->orderBy('created_at', 'desc')->paginate(5);
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
        $videos = Video::orderBy('created_at', 'desc')->paginate(20);
        return view('video', compact('videos'));
    }

      public function videoShow($slug)
      {
        $video = Video::where('slug', $slug)->firstOrFail();
        $video->views = $video->views + 1;
        $video->save();
        $service = new OEmbed();
        $uri = new Uri($video->video_url);
        $videoDisplay = $service->get($uri);

        $topVideos = Video::where('id', '!=', $video->id)->orderBy('views', 'desc')->limit(5)->get();

        // dd($videoDisplay);

        return view('videoshow', compact('video', 'videoDisplay', 'topVideos'));
      }
}
