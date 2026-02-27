<?php

namespace BlissJaspis\Myui\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Blaze\Blaze;

class MyuiServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        // Merge default configuration
        $this->mergeConfigFrom(
            __DIR__.'/../../config/myui.php',
            'myui'
        );
    }

    /**
     * Boot the service provider.
     */
    public function boot()
    {
        // Load views from the package
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'myui');

        // Configure Blaze optimization
        $this->configureBlaze();

        $this->bootPublishing();
    }

    /**
     * Configure Blaze optimization settings.
     */
    private function configureBlaze(): void
    {
        $config = $this->app->make('config');
        $myuiConfig = $config->get('myui.blaze', []);

        // Check if Blaze is globally managed (user has blaze config or env vars set)
        $isGloballyManaged = $this->isBlazeGloballyManaged($config);

        if ($isGloballyManaged) {
            // User is managing Blaze globally - we only configure directories
            $this->configureBlazeDirectories($myuiConfig);
        } else {
            // Myui manages Blaze - configure everything
            $this->configureBlazeFully($myuiConfig);
        }
    }

    /**
     * Check if Blaze is being managed globally by the user.
     */
    private function isBlazeGloballyManaged($config): bool
    {
        // Check if user has set any global Blaze configuration
        $hasGlobalConfig = $config->has('blaze.enabled')
            || $config->has('blaze.debug')
            || env('BLAZE_ENABLED') !== null
            || env('BLAZE_DEBUG') !== null;

        return $hasGlobalConfig;
    }

    /**
     * Configure Blaze directories only (when globally managed).
     */
    private function configureBlazeDirectories(array $config): void
    {
        // Only configure directory optimizations - user controls global settings
        $this->processBlazeDirectories($config);
    }

    /**
     * Configure Blaze fully (when Myui is the only Blaze user).
     */
    private function configureBlazeFully(array $config): void
    {
        // Check if Blaze is enabled
        if (! ($config['enabled'] ?? true)) {
            return;
        }

        // Enable debug mode if configured
        if ($config['debug'] ?? false) {
            Blaze::debug();
        }

        // Enable throwing exceptions if configured
        if ($config['throw_exceptions'] ?? false) {
            Blaze::throw();
        }

        // Process directory optimizations
        $this->processBlazeDirectories($config);
    }

    /**
     * Process Blaze directory optimizations.
     */
    private function processBlazeDirectories(array $config): void
    {
        $directories = $config['directories'] ?? [];
        $excluded = $config['excluded'] ?? [];

        // Resolve excluded paths (handle 'package' and 'package:subfolder' syntax)
        $resolvedExcluded = array_map(fn ($path) => $this->resolveBlazePath($path), $excluded);

        foreach ($directories as $directory) {
            $path = $directory['path'] ?? null;

            // Resolve path (handle 'package' and 'package:subfolder' syntax)
            $resolvedPath = $this->resolveBlazePath($path);

            if (! $resolvedPath || ! is_dir($resolvedPath)) {
                continue;
            }

            // Check if this directory is excluded
            if (in_array($resolvedPath, $resolvedExcluded, true)) {
                continue;
            }

            // Apply optimization settings
            $compile = $directory['compile'] ?? true;
            $fold = $directory['fold'] ?? false;
            $memo = $directory['memo'] ?? false;

            // Skip if compilation is disabled
            if (! $compile) {
                continue;
            }

            // Configure Blaze for this directory
            Blaze::optimize()
                ->in($resolvedPath, fold: $fold, memo: $memo);
        }
    }

    /**
     * Resolve a Blaze path.
     *
     * Handles special syntax:
     * - 'package' or null => resolves to Myui package resources/views/components
     * - 'package:subfolder' => resolves to package subfolder
     * - Full path => returned as-is
     */
    private function resolveBlazePath(?string $path): ?string
    {
        if ($path === null || $path === 'package') {
            return __DIR__.'/../../resources/views/components';
        }

        if (str_starts_with($path, 'package:')) {
            $subfolder = substr($path, 8); // Remove 'package:' prefix

            return __DIR__.'/../../resources/views/components/'.$subfolder;
        }

        return $path;
    }

    /**
     * Boot the publishing.
     */
    private function bootPublishing()
    {
        if ($this->app->runningInConsole()) {
            // Publish configuration
            $this->publishes([
                __DIR__.'/../../config/myui.php' => config_path('myui.php'),
            ], 'myui-config');

            // Publish assets
            $this->publishes([
                __DIR__.'/../../resources/css/myui.css' => resource_path('css/vendor/myui.css'),
            ], 'myui-assets');

            // Publish all (for convenience)
            $this->publishes([
                __DIR__.'/../../config/myui.php' => config_path('myui.php'),
                __DIR__.'/../../resources/css/myui.css' => resource_path('css/vendor/myui.css'),
            ], 'myui');
        }
    }
}