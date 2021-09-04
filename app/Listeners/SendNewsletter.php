<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\ArticleWasPublished;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendNewsletter implements ShouldQueue
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
     * @param  ArticleWasPublished  $event
     * @return void
     */
    public function handle(ArticleWasPublished $event)
    {
        $users = Subscriber::all();
        foreach($users as $user){
            Mail::raw("Checkout ". env('APP_NAME') . "'s new article titled: " . $event->article->title, function
            ($message) use
            ($user) {

                $message->from(env('MAIL_USERNAME'), env('APP_NAME'));

                $message->to($user->email);

            });
        }
    }
}