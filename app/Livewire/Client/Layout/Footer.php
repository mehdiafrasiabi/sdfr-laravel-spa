<?php

namespace App\Livewire\Client\Layout;

use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        return view('livewire.client.layout.footer')->layout('layouts.client.app');
    }
}
