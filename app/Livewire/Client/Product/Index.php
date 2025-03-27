<?php

namespace App\Livewire\Client\Product;

use App\Models\Product;
use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;

class Index extends Component
{
    use SEOTools;
    public $product;


    public function mount($p_code)
    {
        $product = Product::query()
            ->with('image', 'coverImage', 'seo' ,)
            ->select('id', 'name','title','tag','price','course_time','meeting_time','description','category_id','p_code')
            ->where('p_code', $p_code)
            ->firstOrFail();

        if ($product) {
            $discountAmount = $product->discount ? ($product->price * $product->discount / 100) : 0;
            $product->finalPrice = $product->price - $discountAmount;
        }
        $this->product = $product;
        $this->seoConfig($product->seo);
    }

    public function seoConfig($productSeoItem)
    {
        $this->seo()
            ->setTitle($productSeoItem->meta_title)
            ->setDescription($productSeoItem->meta_description);

    }
    public function render()
    {
        return view('livewire.client.product.index')->layout('layouts.client.app');
    }
}
