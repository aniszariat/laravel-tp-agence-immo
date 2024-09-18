<?php

namespace App\Providers;

use App\Weather;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // $this->app->singleton(Weather::class, fn () => new Weather('demo'));
        //     $this->app->singleton(Weather::class, function () {
        //         return new Weather('demo 5');
        //     });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Paginator::useBootstrapFive();
    }
}
