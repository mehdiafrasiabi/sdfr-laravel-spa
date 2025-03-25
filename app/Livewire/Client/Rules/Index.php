<?php

namespace App\Livewire\Client\Rules;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.client.rules.index')->layout('layouts.client.app');
    }
}
