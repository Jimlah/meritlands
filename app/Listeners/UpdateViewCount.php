<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateViewCount
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $views = session()->get('views',collect());

        if(!$views->contains($event->blog->id)) {

        $views->push($event->blog->id);

        session(['views' => $views]);

        $timestamps = $event->blog->timestamps;
        $event->blog->timestamps=false; // avoid view updating the timestamp

        $event->blog->increment('views');

        $event->blog->timestamps=$timestamps; // restore timestamps

        }
    }
}