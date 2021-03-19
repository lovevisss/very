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
        $body = $event->body;
        $email = '530822987@qq.com';
        Mail::send('mail.user_notification', ['body' => $body], function ($message) use ($email) {
            $message->from('admin@zufedfc.edu.cn');
            $message->to($email,'zsy');
            $message->subject('Thank you for create rooms');
        });
    }
}
