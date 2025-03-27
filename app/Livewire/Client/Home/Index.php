<?php

namespace App\Livewire\Client\Home;

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
            ->setTitle('وبسایت مشاور تحصیلی و آموزشی SDFR')
            ->setDescription('وبسایت مشاوره ای SDFR یکی از پرتلاش‌ترین و بروزترین وبسایت های آموزشی در سطح ایران است که همیشه تلاش کرده تا بتواند جدیدترین و بروزترین مقالات و دوره‌های آموزشی را در اختیار دانش آموزان ایرانی قرار دهد.');
    }
    public function render()
    {
        return view('livewire.client.home.index')->layout('layouts.client.app');
    }
}
