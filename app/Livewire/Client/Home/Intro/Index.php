<?php

namespace App\Livewire\Client\Home\Intro;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.client.home.intro.index')->layout('layouts.client.app');
    }
}
