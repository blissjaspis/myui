<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Blaze Optimization
    |--------------------------------------------------------------------------
    |
    | Blaze is a drop-in replacement for anonymous Blade components that
    | compiles templates into optimized PHP functions, eliminating 91-97%
    | of the rendering overhead while maintaining full Blade compatibility.
    |
    | For more information, see: https://github.com/livewire/blaze
    |
    | IMPORTANT: How Myui handles Blaze configuration:
    |
    | If you have Blaze installed globally (via composer require livewire/blaze),
    | the following settings (enabled, debug, throw_exceptions) are IGNORED.
    | Myui will only configure directory optimizations, letting you control
    | global Blaze settings via BLAZE_ENABLED, BLAZE_DEBUG, or config/blaze.php.
    |
    | If Blaze is NOT installed globally, Myui manages Blaze entirely,
    | and these settings will be respected.
    |
    */

    'blaze' => [

        /*
        |--------------------------------------------------------------------------
        | Enable Blaze
        |--------------------------------------------------------------------------
        |
        | This option controls whether Blaze optimization is enabled.
        | When disabled, standard Blade rendering will be used.
        |
        | IGNORED if Blaze is globally configured (see note above).
        |
        */

        'enabled' => env('MYUI_BLAZE_ENABLED', true),

        /*
        |--------------------------------------------------------------------------
        | Debug Mode
        |--------------------------------------------------------------------------
        |
        | When enabled, a debug overlay will appear on every page showing
        | rendering times and performance metrics.
        |
        | IGNORED if Blaze is globally configured (see note above).
        |
        */

        'debug' => env('MYUI_BLAZE_DEBUG', false),

        /*
        |--------------------------------------------------------------------------
        | Throw Exceptions
        |--------------------------------------------------------------------------
        |
        | When enabled, Blaze will throw exceptions encountered during
        | folding instead of silently falling back to standard compilation.
        | This is useful for debugging folding issues.
        |
        | IGNORED if Blaze is globally configured (see note above).
        |
        */

        'throw_exceptions' => env('MYUI_BLAZE_THROW_EXCEPTIONS', false),

        /*
        |--------------------------------------------------------------------------
        | Optimized Directories
        |--------------------------------------------------------------------------
        |
        | Define which directories should be optimized by Blaze.
        | You can specify different optimization strategies per directory:
        |
        | - 'compile' (default): Compile to optimized PHP functions
        | - 'fold': Pre-render to static HTML at compile time (fastest)
        | - 'memo': Enable runtime memoization for repeated components
        |
        | Special value: Use 'package' or null for the Myui package components path.
        | This is automatically resolved to the correct vendor path at runtime.
        |
        | Examples:
        | [
        |     'path' => 'package',  // Myui package components (auto-resolved)
        |     'compile' => true,
        |     'fold' => false,
        |     'memo' => false,
        | ],
        | [
        |     'path' => resource_path('views/components/icons'),  // Your app components
        |     'compile' => true,
        |     'memo' => true,
        | ],
        |
        */

        'directories' => [
            // Default: Optimize all Myui package components
            [
                'path' => 'package',  // Auto-resolved to vendor/blissjaspis/myui/resources/views/components
                'compile' => true,
                'fold' => false,
                'memo' => false,
            ],

            // Example: Icons benefit from memoization
            // [
            //     'path' => 'package:icons',  // Auto-resolved to package icons subfolder
            //     'compile' => true,
            //     'fold' => false,
            //     'memo' => true,
            // ],

            // Example: Static components can use folding
            // [
            //     'path' => 'package:badge',  // Auto-resolved to package badge subfolder
            //     'compile' => true,
            //     'fold' => true,
            //     'memo' => false,
            // ],
        ],

        /*
        |--------------------------------------------------------------------------
        | Excluded Directories
        |--------------------------------------------------------------------------
        |
        | Define directories that should be excluded from Blaze optimization.
        | These paths will use standard Blade rendering.
        |
        | Use 'package' or 'package:subfolder' syntax for Myui package paths.
        | Use full paths (resource_path(), base_path(), etc.) for custom paths.
        |
        */

        'excluded' => [
            // 'package:legacy',  // Excludes vendor/blissjaspis/myui/resources/views/components/legacy
        ],

        /*
        |--------------------------------------------------------------------------
        | Component-Level Defaults
        |--------------------------------------------------------------------------
        |
        | Default settings for the @blaze directive when used in components.
        | These can be overridden per-component using directive parameters.
        |
        | - 'safe': Props that are pass-through (can fold even when dynamic)
        | - 'unsafe': Props/slots that should abort folding when dynamic
        |
        */

        'defaults' => [
            'safe' => [],
            'unsafe' => [],
        ],

    ],

];
