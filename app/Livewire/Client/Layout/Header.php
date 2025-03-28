<?php

namespace App\Livewire\Client\Layout;

use App\Models\Cart;
use Livewire\Component;
use Livewire\Attributes\On;

class Header extends Component
{
    public $cart = 0;

    public function mount()
    {
        if (auth()->check()) { // بررسی اینکه کاربر لاگین کرده است یا نه
            $this->cart = Cart::query()
                ->where('user_id', auth()->id())
                ->count();
        }
    }
    #[On('add-to-cart')]
    public function getUserCart()
    {
        if (auth()->check()) {
            $this->cart = Cart::query()
                ->where('user_id', auth()->id())
                ->count();
        }
    }

    public function render()
    {
        return view('livewire.client.layout.header')->layout('layouts.client.app');
    }
}
