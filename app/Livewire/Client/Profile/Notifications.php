<?php

namespace App\Livewire\Client\Profile;

use Livewire\Component;

class Notifications extends Component
{
    public function render()
    {
        return view('livewire.client.profile.notifications')->layout('layouts.client.app');
    }
}
