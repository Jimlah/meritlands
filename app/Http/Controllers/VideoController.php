<?php

namespace App\Http\Controllers;

use App\Models\Video;
use RicardoFiorani\OEmbed\OEmbed;
use App\Http\Requests\VideoRequest;
use GuzzleHttp\Psr7\Uri;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::paginate(10);
        return view('dashboard.videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $video = new Video();
        return view('dashboard.videos.create', compact('video'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\VideoRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(VideoRequest $request)
    {
        $service = new OEmbed();
        $uri = new Uri($request->input('video_url'));
        $video = $service->get($uri);

        Video::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'video_url' => $request->input('video_url'),
            'thumbnail_url' => $video->getThumbnailUrl(),
        ]);

        return redirect()->route('videos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $Video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $Video)
    {
        return view('dashboard.videos.show', compact('Video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $Video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        return view('dashboard.videos.create', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\VideoRequest  $request
     * @param  \App\Models\Video  $Video
     * @return \Illuminate\Http\Response
     */
    public function update(VideoRequest $request, Video $Video)
    {
        $Video->update($request->all());
        return redirect()->route('videos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $Video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $Video)
    {
        $Video->delete();
        return redirect()->route('videos.index');
    }
}