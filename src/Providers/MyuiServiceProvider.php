<?php

namespace BlissJaspis\Myui\Providers;

use Illuminate\Support\Facades\Blade;
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
        // $this->loadViewsFrom(__DIR__.'/../../Views', 'myui');

        // Register component namespace for myui:: syntax
        Blade::componentNamespace('BlissJaspis\Myui\App\View\Components', 'myui');

        // Register individual components for backward compatibility
        $this->registerComponents();

        $this->bootPublishing();
    }

    /**
     * Register individual components for backward compatibility.
     */
    private function registerComponents()
    {
        $components = [
            'button' => \BlissJaspis\Myui\App\View\Components\Button::class,
            'input' => \BlissJaspis\Myui\App\View\Components\Input::class,
            'card' => \BlissJaspis\Myui\App\View\Components\Card::class,
            'card-header' => \BlissJaspis\Myui\App\View\Components\CardHeader::class,
            'card-content' => \BlissJaspis\Myui\App\View\Components\CardContent::class,
            'alert' => \BlissJaspis\Myui\App\View\Components\Alert::class,
            'badge' => \BlissJaspis\Myui\App\View\Components\Badge::class,
        ];

        foreach ($components as $alias => $component) {
            if (class_exists($component)) {
                Blade::component($component, 'myui-' . $alias);
            }
        }
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