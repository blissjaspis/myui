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
        $this->mergeConfigFrom(__DIR__.'/../../config/myui.php', 'myui');  // Merge config

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
        $this->loadViewsFrom(__DIR__.'/../Views', $this->app->config['myui.prefix']);

        $this->bootPublishing();
    }


    /**
     * Boot the publishing.
     */
    private function bootPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../config/myui.php' => $this->app->configPath('myui.php'),
            ], 'config');
        }
    }
}