<?php

namespace App\Listeners;

use App\Events\TestEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\Test;

class TestListener
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
     * @param  \App\Events\Test  $event
     * @return void
     */
    public function handle(Test $event)
    {
        return \redirect()->route('forum.test');
    }
}
