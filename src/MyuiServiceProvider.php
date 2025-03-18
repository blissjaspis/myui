<?php

namespace BlissJaspis\Myui;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;


class MyuiServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/myui.php', 'myui');  // Merge config
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'myui');

        Blade::componentNamespace('BlissJaspis\Myui\Views\Components', 'myui');
        
        $this->bootPublishing();
    }

    private function bootPublishing()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/myui.php' => $this->app->configPath('myui.php'),
            ], 'myui-config');
        }
    }
}