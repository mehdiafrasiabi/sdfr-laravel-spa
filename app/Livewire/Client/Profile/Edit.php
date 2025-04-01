<?php

namespace App\Livewire\Client\Profile;

use Livewire\Component;

class Edit extends Component
{
    public function render()
    {
        return view('livewire.client.profile.edit')->layout('layouts.client.app');
    }
}
