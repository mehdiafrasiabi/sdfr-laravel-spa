<?php

namespace App\Livewire\Client\Profile\Ticket;

use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;

class Index extends Component
{
    use SEOTools;

    public function mount()
    {
        $this->seoConfig();
    }
    public function seoConfig()
    {
        $this->seo()
            ->setTitle('پشتیبانی');
    }
    public function render()
    {
        return view('livewire.client.profile.ticket.index')->layout('layouts.client.app');
    }
}
