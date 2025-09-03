<?php

namespace BlissJaspis\Myui;

use Illuminate\Support\Facades\Config;

class Myui
{
    /**
     * Get the package version
     */
    public static function version()
    {
        return "1.0.0";
    }

    /**
     * Get configuration value
     */
    public static function config(?string $key = null, $default = null)
    {
        $configKey = $key ? "myui.{$key}" : 'myui';

        // Try to get config from Laravel, fallback to defaults if not available
        try {
            return Config::get($configKey, $default);
        } catch (\Exception $e) {
            // Fallback to default values when Laravel container isn't available
            $defaults = [
                'framework' => 'tailwind',
                'prefix' => 'myui',
                'global_classes' => [],
                'component_paths' => [],
                'publish_assets' => true,
            ];

            if ($key === null) {
                return $defaults;
            }

            return $defaults[$key] ?? $default;
        }
    }

    /**
     * Get the current CSS framework
     */
    public static function framework()
    {
        return static::config('framework', 'tailwind');
    }

    /**
     * Get the component prefix
     */
    public static function prefix()
    {
        return static::config('prefix', 'myui');
    }

    /**
     * Check if using Tailwind CSS
     */
    public static function usingTailwind()
    {
        return static::framework() === 'tailwind';
    }

    /**
     * Check if using Bootstrap
     */
    public static function usingBootstrap()
    {
        return static::framework() === 'bootstrap';
    }

    /**
     * Get global classes
     */
    public static function globalClasses()
    {
        return static::config('global_classes', []);
    }

    /**
     * Merge global classes with component classes
     */
    public static function mergeClasses(array $componentClasses = [])
    {
        $globalClasses = static::globalClasses();

        return array_merge($globalClasses, $componentClasses);
    }
}