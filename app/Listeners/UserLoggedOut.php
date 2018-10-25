<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Logout;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Auth;
use Log;
use Activity;

class UserLoggedOut
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
     * @param  Logout  $event
     * @return void
     */
    public function handle(Logout $event)
    {
        if (Auth::check()){
            $msg = '[UserLogger] => ' .  Auth::user()->name . ' <' . Auth::user()->email . '> hat sich abgemeldet';
            Log::info($msg);
//            Activity::log($msg);
        }
    }
}
