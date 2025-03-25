<?php

namespace App\Livewire\Client\Home\Features;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.client.home.features.index')->layout('layouts.client.app');;
    }
}
