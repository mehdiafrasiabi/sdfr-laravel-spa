<?php

namespace App\Livewire\Client\Profile;

use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;

class Financial extends Component
{
    use SEOTools;

    public function mount()
    {
        $this->seoConfig();
    }
    public function seoConfig()
    {
        $this->seo()
            ->setTitle('مالی و پرداخت');
    }
    public function render()
    {
        return view('livewire.client.profile.financial')->layout('layouts.client.app');
    }
}
