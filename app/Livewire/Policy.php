<?php

namespace App\Livewire;

use App\Models\Setting;
use Livewire\Component;

class Policy extends Component
{
    public function render()
    {
        return view('livewire.policy',[
            'setting' => Setting::all(),
        ]);
    }
}
