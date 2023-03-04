<?php

namespace App;

use Illuminate\Support\Str;

class Site
{
    public const ADMIN = 'admin';

    public const PLAYER = 'player';

    public string $site;

    public function __construct()
    {
        $adminUrl = Str::replace(['https://', 'http://'], '', config('app.admin_url'));

        $this->site = match (request()->host()) {
            $adminUrl => 'admin',
            default => 'player',
        };
    }

    public function isPlayer(): bool
    {
        return $this->site === self::PLAYER;
    }

    public function isAdmin(): bool
    {
        return $this->site === self::ADMIN;
    }
}
