<?php

namespace App\Livewire\Client\Shop;

use App\Models\Product;
use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;

class Index extends Component
{
    use SEOTools;

    public $search = '';

    public function mount()
    {
        $this->seoConfig();
    }

    public function seoConfig()
    {
        $this->seo()
            ->setTitle('فروشگاه')
            ->setDescription('آزمون به سبک SDFR، کلاس مشاوره تحصیلی');
    }

    public function render()
    {
        $products = Product::query()
            ->with('coverImage', 'seo')
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('name', 'like', "%{$this->search}%")
                        ->orWhere('tag', 'like', "%{$this->search}%");
                });
            })
            ->select('id', 'name', 'title', 'tag', 'price', 'meeting_time', 'course_time', 'p_code')
            ->latest()
            ->get();

        return view('livewire.client.shop.index', compact('products'));
    }
}
