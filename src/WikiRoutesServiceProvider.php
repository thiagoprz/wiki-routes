<?php

namespace Thiagoprz\WikiRoutes;
use Illuminate\Support\ServiceProvider;

/**
 * Class WikiRoutesServiceProvider
 * @package Thiagoprz\WikiRoutes
 */
class WikiRoutesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Testing tool controller
        $this->app->make('Thiagoprz\WikiRoutes\Http\Controllers\WikiRoutesController');
        // Views for the testing tool
        $this->loadViewsFrom(__DIR__.'/views', 'wiki-routes');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        // Routes for testing tool
        include __DIR__.'/routes/web.php';
        $this->publishes([
            __DIR__.'/config/wiki_routes.php' => config_path('wiki_routes.php'),
        ]);
    }

}