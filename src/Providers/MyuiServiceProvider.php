<?php

namespace BlissJaspis\Myui\Providers;

use Illuminate\Support\ServiceProvider;

class MyuiServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        // Register the facade accessor
        $this->app->singleton('myui', function ($app) {
            return new \BlissJaspis\Myui\Myui();
        });
    }

    /**
     * Boot the service provider.
     */
    public function boot()
    {
        // Load views from the package
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'myui');

        $this->bootPublishing();
    }


    /**
     * Boot the publishing.
     */
    private function bootPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../resources/css/myui.css' => resource_path('css/vendor/myui.css'),
            ], 'myui-assets');
        }
    }
}