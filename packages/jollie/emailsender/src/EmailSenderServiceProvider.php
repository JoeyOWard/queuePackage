<?php

namespace Jollie\EmailSender;

use Illuminate\Support\ServiceProvider;

class EmailSenderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadViewsFrom(__DIR__. '/resources/views/', 'emailsender');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Jollie\EmailSender\EmailSenderController');
    }
}
