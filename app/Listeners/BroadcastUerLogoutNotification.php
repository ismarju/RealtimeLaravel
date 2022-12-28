<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Logout;
use App\Events\UserSessionChanged;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class BroadcastUerLoginNotification
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
    public function handle(Logout $event)
    {
        broadcast(new UserSessionChanged("{$event->user->name} is offline",'danger'))
    }
}
