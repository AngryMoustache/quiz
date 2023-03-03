<?php

namespace App\Http\Livewire;

use App\Models\Game;
use Livewire\Component;

class WaitingRoom extends Component
{
    public Game $game;

    public string $name = '';
    public array $avatar = [];

    public function mount(Game $game)
    {
        $this->game = $game;
    }
}
