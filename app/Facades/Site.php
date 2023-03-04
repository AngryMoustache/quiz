<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static bool isPlayer()
 * @method static bool isAdmin()
 */
class Site extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'site';
    }
}
