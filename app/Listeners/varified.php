<?php

namespace App\Listeners;

use App\Events\email_varification;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class varified
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
     * @param  email_varification  $event
     * @return void
     */
    public function handle(email_varification $event)
    {
        //
    }
}
