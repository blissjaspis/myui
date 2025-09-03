<?php

namespace BlissJaspis\Myui\Tests;

use BlissJaspis\Myui\Myui;

class MyuiTest
{
    public static function test_it_returns_correct_version()
    {
        assert(Myui::version() === '1.0.0', 'Version should be 1.0.0');
        echo "✓ Version test passed\n";
    }

    public static function test_it_can_get_config_values()
    {
        // Test with default config
        assert(Myui::framework() === 'tailwind', 'Framework should be tailwind');
        assert(Myui::prefix() === 'myui', 'Prefix should be myui');
        assert(Myui::usingTailwind() === true, 'Should be using Tailwind');
        assert(Myui::usingBootstrap() === false, 'Should not be using Bootstrap');
        echo "✓ Config test passed\n";
    }

    public static function test_it_can_merge_global_classes()
    {
        $componentClasses = ['btn', 'btn-primary'];
        $merged = Myui::mergeClasses($componentClasses);

        assert(is_array($merged), 'Merged classes should be an array');
        assert(in_array('btn', $merged), 'Should contain btn class');
        assert(in_array('btn-primary', $merged), 'Should contain btn-primary class');
        echo "✓ Global classes test passed\n";
    }

    public static function run()
    {
        echo "Running Myui tests...\n";
        self::test_it_returns_correct_version();
        self::test_it_can_get_config_values();
        self::test_it_can_merge_global_classes();
        echo "All tests passed!\n";
    }
}
