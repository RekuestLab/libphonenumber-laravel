<?php

namespace Rekuest\Core;

use Illuminate\Support\Facades\Facade;

class LPhoneFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lphonefacade';
    }
}