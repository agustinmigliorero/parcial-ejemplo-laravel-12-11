<?php

namespace App\Listeners;

use App\Events\EventoConsulta;
use App\Mail\MailConsulta;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ListenerConsulta
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(EventoConsulta $event): void
    {
        Mail::to('test@test.com')->send(new MailConsulta($event->inquiry));
        Log::info($event->inquiry->email);
    }
}
