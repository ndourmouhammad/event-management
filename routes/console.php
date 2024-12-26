<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('app:send-event-reminders', function () {
    // Logic for sending event reminders


    $this->info('Event reminders sent successfully!');
})->purpose('Send daily event reminders');
