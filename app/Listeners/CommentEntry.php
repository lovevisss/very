<?php

namespace App\Listeners;

use App\Events\Comment;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CommentEntry
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
     * @param  Comment  $event
     * @return void
     */
    public function handle(Comment $event)
    {
        $body = $event->body;
        $comment = new App\Comment();
        $comment->body = $body;
        $comment->article_id = 2;
        $comment->save();
    }
}
