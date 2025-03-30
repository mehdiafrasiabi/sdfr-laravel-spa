<?php

namespace App\Livewire\Client\Layout;

use App\Models\Cart;
use Livewire\Component;
use Livewire\Attributes\On;

class Header extends Component
{
    public $cart=0;

    public function mount()
    {
        $this->cart = Cart::query()
            ->where('user_id', Auth()->id())->count();
    }

    #[On('add-to-cart')]
    public function getUserCart()
    {
        $this->cart = $this->cart + 1;
    }

    #[On('remove-from-cart')]
    public function removeUserCart($newCount)
    {
        $this->cart = $newCount;
    }

    public function render()
    {
        return view('livewire.client.layout.header')->layout('layouts.client.app');
    }
}
