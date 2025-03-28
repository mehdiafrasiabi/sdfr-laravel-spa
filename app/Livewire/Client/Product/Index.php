<?php

namespace App\Livewire\Client\Product;

use App\Models\Cart;
use App\Models\Product;
use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;

class Index extends Component
{
    use SEOTools;
    public $product;
    public $price;
    public $productId;
    public $inCart = false;



    public function mount($p_code)
    {
        $this->product = Product::query()
            ->with('image', 'coverImage', 'seo')
            ->select('id', 'name', 'title', 'tag', 'price', 'course_time', 'meeting_time', 'description', 'category_id', 'p_code')
            ->where('p_code', $p_code)
            ->firstOrFail();

        $this->seoConfig($this->product->seo);

        $this->productId = $this->product->id; // مقداردهی `productId`

        $this->inCart = Cart::query()->where([
            'product_id'=> $this->product->id,
            'user_id' => auth()->id(),
        ])->exists();
    }


    public function addToCart()
    {
        Cart::query()->create([
            'product_id' => $this->productId, // مقدار را از `productId` بگیر
            'user_id' => auth()->id(),
        ]);

        sleep(1);
        $this->inCart = true;
        $this->dispatch('add-to-cart', productId: $this->productId);
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
