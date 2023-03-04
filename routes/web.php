<?php

use App\Facades\Site;
use App\Http\Livewire\Admin;
use App\Http\Livewire\Player;
use Illuminate\Support\Facades\Route;

// Player routes
if (Site::isPlayer()) {
    Route::get('/', Player\Lounge::class)
        ->name('player.lounge');
}

// Admin routes
if (Site::isAdmin()) {
    Route::get('/', Admin\Home::class)
        ->name('admin.home');
}
