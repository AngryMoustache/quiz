<?php

namespace App\Models;

use App\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'username',
        'password',
    ];

    public function loginAs()
    {
        Auth::login($this);
    }
}
