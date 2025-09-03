<?php

namespace BlissJaspis\Myui\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see BlissJaspis\Myui\Myui
 */
class Myui extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'myui';
    }
}
