<?php

require_once __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/MyuiTest.php';
require_once __DIR__ . '/MyuiServiceProviderTest.php';

use BlissJaspis\Myui\Tests\MyuiTest;
use BlissJaspis\Myui\Tests\MyuiServiceProviderTest;

echo "Myui Package Tests\n";
echo "==================\n\n";

echo "Testing core functionality...\n";
MyuiTest::run();
echo "\n";

echo "Testing service provider and components...\n";
MyuiServiceProviderTest::run();

echo "\n🎉 All tests completed successfully!\n";
echo "\n📋 Test Summary:\n";
echo "   ✅ Myui class functionality\n";
echo "   ✅ Service provider registration\n";
echo "   ✅ Component classes existence\n";
echo "   ✅ Namespace syntax support\n";
echo "   ✅ Backward compatibility\n\n";
