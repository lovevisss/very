<?php

namespace App\Listeners;

use App\Events\CommentSave;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Comment;

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
     * @param  CommentSave  $event
     * @return void
     */
    public function handle(CommentSave $event)
    {
        $body = $event->body;
        $comment = new Comment();
        $comment->body = $body;
        $comment->article_id = 2;
        $comment->save();
    }
}
