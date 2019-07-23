<?php

namespace SundayIT\chatframe\Facades;

use Illuminate\Support\Facades\Facade;

class chatframe extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'chatframe';
    }
}
