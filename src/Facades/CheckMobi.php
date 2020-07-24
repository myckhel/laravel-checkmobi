<?php

namespace Myckhel\CheckMobi\Facades;

use Illuminate\Support\Facades\Facade;

class CheckMobi extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'checkmobi';
    }
}
