<?php

namespace NotificationChannels\CustomEmail;

use Illuminate\Support\ServiceProvider;

class CustomEmailServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // Bootstrap code here.

    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->when(CustomEmailChannel::class)
            ->give(function () {
                $config = config('services.custom_email');
                return $config;
            });
    }
}
