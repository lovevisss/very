<?php

namespace App\Listeners;

use App\Events\CommentSave;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendUserNotification
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
        //
    }
}
