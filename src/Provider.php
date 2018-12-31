<?php

namespace LaravelDevicesCollector;

use Illuminate\Support\ServiceProvider;
use Route;

class Provider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Route::post('api/devices', [DevicesController::class, 'store']);

        $this->loadMigrationsFrom(__DIR__ . '/migrations');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
