<?php

namespace Astrogoat\Greenhouse;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\Greenhouse\Greenhouse
 */
class GreenhouseFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'greenhouse';
    }
}
