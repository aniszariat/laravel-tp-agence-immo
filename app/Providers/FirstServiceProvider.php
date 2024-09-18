<?php

namespace App\Providers;

use App\Weather;
use Illuminate\Support\ServiceProvider;

class FirstServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(Weather::class, function () {
            return new Weather('demo 5');
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
