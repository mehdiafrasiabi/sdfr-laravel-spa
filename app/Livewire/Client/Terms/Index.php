<?php

namespace App\Livewire\Client\Terms;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.client.terms.index')->layout('layouts.client.app');
    }
}
