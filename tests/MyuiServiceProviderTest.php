<?php

namespace BlissJaspis\Myui\Tests;

use BlissJaspis\Myui\Myui;
use BlissJaspis\Myui\Providers\MyuiServiceProvider;

class MyuiServiceProviderTest
{
    public static function test_it_can_be_instantiated()
    {
        $provider = new MyuiServiceProvider(null);
        assert($provider instanceof MyuiServiceProvider, 'Should be instance of MyuiServiceProvider');
        echo "✓ Service provider instantiation test passed\n";
    }

    public static function test_it_has_correct_service_provider_methods()
    {
        $provider = new MyuiServiceProvider(null);
        assert(method_exists($provider, 'register'), 'Should have register method');
        assert(method_exists($provider, 'boot'), 'Should have boot method');
        assert(method_exists($provider, 'registerComponents'), 'Should have registerComponents method');
        echo "✓ Service provider methods test passed\n";
    }

    public static function test_component_classes_exist()
    {
        $components = [
            'BlissJaspis\Myui\App\View\Components\Button',
            'BlissJaspis\Myui\App\View\Components\Input',
            'BlissJaspis\Myui\App\View\Components\Card',
            'BlissJaspis\Myui\App\View\Components\Alert',
            'BlissJaspis\Myui\App\View\Components\Badge',
        ];

        foreach ($components as $component) {
            assert(class_exists($component), "Component class {$component} should exist");
        }
        echo "✓ Component classes test passed\n";
    }

    public static function run()
    {
        echo "Running MyuiServiceProvider tests...\n";
        self::test_it_can_be_instantiated();
        self::test_it_has_correct_service_provider_methods();
        self::test_component_classes_exist();
        echo "All service provider tests passed!\n";
    }
}
