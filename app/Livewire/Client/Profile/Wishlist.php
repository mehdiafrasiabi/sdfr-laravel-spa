<?php

namespace App\Livewire\Client\Profile;

use Livewire\Component;

class Wishlist extends Component
{
    public function render()
    {
        return view('livewire.client.profile.wishlist')->layout('layouts.client.app');
    }
}
