<?php

namespace NotificationChannels\Textit;

use Illuminate\Notifications\ChannelManager;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\ServiceProvider;

class TextitServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        // Bootstrap code here.
        Notification::resolved(function (ChannelManager $service) {
            $service->extend('textit', function ($app) {
                return new Textit(config('services.textit'));
            });
        });
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}
