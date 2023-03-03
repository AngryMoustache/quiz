<?php

namespace App\Http\Livewire;

use Illuminate\Support\Str;
use Livewire\Component;

class Home extends Component
{
    public $code = '';

    public function submit()
    {
        $this->validate(['code' => 'required|exists:games,code']);

        return redirect()->route('join.waiting-room', Str::slug($this->code));
    }
}
