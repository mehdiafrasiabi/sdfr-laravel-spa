<?php

namespace App\Livewire\Client\AboutUs;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.client.about-us.index')->layout('layouts.client.app');
    }
}
