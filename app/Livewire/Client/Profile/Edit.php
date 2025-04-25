<?php

namespace App\Livewire\Client\Profile;

use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;

class Edit extends Component
{
    use SEOTools;

    public function mount()
    {
        $this->seoConfig();
    }
    public function seoConfig()
    {
        $this->seo()
            ->setTitle('ویرایش پروفایل');
    }
    public function render()
    {
        return view('livewire.client.profile.edit')->layout('layouts.client.app');
    }
}
