<?php

namespace App\Livewire\Client\Profile\Ticket;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.client.profile.ticket.index')->layout('layouts.client.app');
    }
}
