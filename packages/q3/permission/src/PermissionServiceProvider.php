<?php

namespace Q3\Permission;

use Illuminate\Support\ServiceProvider;

class PermissionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/q3/permission'),
        ]);
//        $this->loadViewsFrom(__DIR__ . '/views', 'timezones');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        include __DIR__ . '/routes.php';
        $this->app->make('Q3\Permission\PermissionController');
    }
}
