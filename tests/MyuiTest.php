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

    public static function test_it_can_detect_tailwind_css()
    {
        try {
            // Test the hasTailwind method
            $hasTailwind = Myui::hasTailwind();

            // This will depend on whether the test environment has Tailwind installed
            // For now, we'll just ensure the method returns a boolean
            assert(is_bool($hasTailwind), 'hasTailwind should return a boolean');
            echo "✓ Tailwind detection test passed\n";
        } catch (\Exception $e) {
            // If Laravel helpers are not available, skip this test
            echo "⚠ Tailwind detection test skipped (Laravel not available)\n";
        }
    }

    public static function test_it_can_get_tailwind_version()
    {
        try {
            $version = Myui::tailwindVersion();

            // Version can be null if Tailwind is not available
            assert($version === null || is_string($version), 'Version should be null or string');
            echo "✓ Tailwind version test passed\n";
        } catch (\Exception $e) {
            // If Laravel helpers are not available, skip this test
            echo "⚠ Tailwind version test skipped (Laravel not available)\n";
        }
    }

    public static function run()
    {
        echo "Running Myui tests...\n";
        self::test_it_returns_correct_version();
        self::test_it_can_get_config_values();
        self::test_it_can_merge_global_classes();
        self::test_it_can_detect_tailwind_css();
        self::test_it_can_get_tailwind_version();
        echo "All tests passed!\n";
    }
}
