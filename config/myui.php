<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default CSS Framework
    |--------------------------------------------------------------------------
    |
    | This option controls the default CSS framework to use for styling
    | components. Currently supports: 'tailwind', 'bootstrap'
    |
    */

    'framework' => env('MYUI_FRAMEWORK', 'tailwind'),

    /*
    |--------------------------------------------------------------------------
    | Component Prefix
    |--------------------------------------------------------------------------
    |
    | This option controls the prefix used for component names.
    | For example: <x-myui-button> vs <x-button>
    |
    */

    'prefix' => env('MYUI_PREFIX', 'myui'),

    /*
    |--------------------------------------------------------------------------
    | Global Classes
    |--------------------------------------------------------------------------
    |
    | Global CSS classes to apply to all components
    |
    */

    'global_classes' => [],

    /*
    |--------------------------------------------------------------------------
    | Custom Component Paths
    |--------------------------------------------------------------------------
    |
    | Additional paths to look for custom components
    |
    */

    'component_paths' => [],
];