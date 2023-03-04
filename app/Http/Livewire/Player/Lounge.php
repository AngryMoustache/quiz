<?php

namespace App\Http\Livewire\Player;

use Livewire\Component;

class Lounge extends Component
{
    public $code = '';

    public function submit()
    {
        $this->validate(['code' => 'required|exists:games,code']);
    }
}
