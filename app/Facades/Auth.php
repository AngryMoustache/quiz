<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \App\Models\User|null current()
 * @method static void login(\App\Models\User $user)
 * @method static void logout()
 */
class Auth extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'custom-auth';
    }
}
