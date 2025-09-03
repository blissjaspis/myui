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
     * Check if Tailwind CSS is available in the project
     */
    public static function hasTailwind()
    {
        // Check for common Tailwind indicators
        if (static::framework() !== 'tailwind') {
            return false;
        }

        try {
            // Check for Tailwind config files
            // Use Laravel helper if available, otherwise fall back to current directory
            $basePath = '';
            if (function_exists('base_path')) {
                try {
                    $basePath = base_path();
                } catch (\Exception $e) {
                    $basePath = dirname(__DIR__, 2);
                }
            } else {
                $basePath = dirname(__DIR__, 2);
            }

            $tailwindFiles = [
                $basePath . '/tailwind.config.js',
                $basePath . '/tailwind.config.ts',
                $basePath . '/postcss.config.js',
            ];

            foreach ($tailwindFiles as $file) {
                if (file_exists($file)) {
                    return true;
                }
            }

            // Check for Tailwind in package.json dependencies
            $packageJson = $basePath . '/package.json';
            if (file_exists($packageJson)) {
                $packageContent = json_decode(file_get_contents($packageJson), true);
                if (isset($packageContent['dependencies']) || isset($packageContent['devDependencies'])) {
                    $allDeps = array_merge(
                        $packageContent['dependencies'] ?? [],
                        $packageContent['devDependencies'] ?? []
                    );

                    if (isset($allDeps['tailwindcss'])) {
                        return true;
                    }
                }
            }
        } catch (\Exception $e) {
            // If we can't access the filesystem, assume Tailwind is not available
            return false;
        }

        return false;
    }

    /**
     * Get Tailwind CSS version if available
     */
    public static function tailwindVersion()
    {
        if (!static::hasTailwind()) {
            return null;
        }

        try {
            $basePath = '';
            if (function_exists('base_path')) {
                try {
                    $basePath = base_path();
                } catch (\Exception $e) {
                    $basePath = dirname(__DIR__, 2);
                }
            } else {
                $basePath = dirname(__DIR__, 2);
            }
            $packageJson = $basePath . '/package.json';
            if (file_exists($packageJson)) {
                $packageContent = json_decode(file_get_contents($packageJson), true);
                $allDeps = array_merge(
                    $packageContent['dependencies'] ?? [],
                    $packageContent['devDependencies'] ?? []
                );

                return $allDeps['tailwindcss'] ?? null;
            }
        } catch (\Exception $e) {
            // If we can't access the filesystem, return null
            return null;
        }

        return null;
    }

    /**
     * Get global classes
     */
    public static function globalClasses()
    {
        return static::config('global_classes', []);
    }

    /**
     * Get global classes as string
     */
    public static function globalClassesToString()
    {
        return implode(' ', static::globalClasses());
    }

    /**
     * Merge global classes with component classes to array
     */
    public static function mergeClasses(array $componentClasses = [])
    {
        $globalClasses = static::globalClasses();

        return array_merge($globalClasses, $componentClasses);
    }

    /**
     * Merge global classes with component classes to string
     */
    public static function mergeClassesToString(array $componentClasses = [])
    {
        $globalClasses = static::globalClasses();

        return implode(' ', array_merge($globalClasses, $componentClasses));
    }
}