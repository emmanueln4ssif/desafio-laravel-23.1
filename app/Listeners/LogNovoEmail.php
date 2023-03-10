<?php

namespace App\Listeners;

use App\Events\NovoEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class LogNovoEmail implements ShouldQueue
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
     * @param  \App\Events\NovoEmail  $event
     * @return void
     */
    public function handle(NovoEmail $event)
    {
        Log::info('Email enviado');
    }
}
