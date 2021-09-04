<?php

namespace App\Http\Controllers;

use App\Http\Requests\VideoRequest;
use App\Models\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        return view('dashboard.videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\VideoRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(VideoRequest $request)
    {
        Video::create($request->all());
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
    public function edit(Video $Video)
    {
        return view('dashboard.videos.edit', compact('Video'));
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