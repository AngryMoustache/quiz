<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    public string $username = '';
    public string $password = '';
    public string $password_confirmation = '';

    public function login()
    {
        $this->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Try to log in
        $user = User::where('username', $this->username)->get()
            ->skipUntil(fn ($user) => password_verify($this->password, $user->password))
            ->first();

        if (! $user) {
            $this->addError('password', 'Invalid username or password');
            return;
        }

        $user->loginAs();

        return $this->toDashboard();
    }

    public function register()
    {
        $this->validate([
            'username' => 'required|unique:users',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'username' => $this->username,
            'password' => Hash::make($this->password),
        ]);

        $user->loginAs();

        return $this->toDashboard();
    }

    public function resetErrorBag($key = null)
    {
        // Needed to add this so that I can reset the error bag from AlpineJS
        parent::resetErrorBag($key);
    }

    private function toDashboard()
    {
        return redirect()->route('admin.dashboard');
    }
}
