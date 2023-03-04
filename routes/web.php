<?php

use App\Facades\Auth;
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
    if (Auth::current()) {
        Route::redirect('/', '/dashboard')->name('admin.login');
    } else {
        Route::get('/', Admin\Login::class)->name('admin.login');
    }

    Route::get('/dashboard', Admin\Dashboard::class)
        ->name('admin.dashboard');
}
