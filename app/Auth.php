<?php

namespace App;

use App\Models\User;

class Auth
{
    public const SESSION = 'quiz-auth';

    public ?User $user = null;

    public function current()
    {
        $this->user ??= User::find(session(self::SESSION));

        return $this->user;
    }

    public function login(User $user)
    {
        session()->put(self::SESSION, $user->id);
        $this->user = $user;
    }

    public function logout()
    {
        session()->forget(self::SESSION);
        $this->user = null;
    }
}
