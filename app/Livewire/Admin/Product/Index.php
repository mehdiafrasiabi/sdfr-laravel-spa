<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\SeoItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function delete(Product $product)
    {
        DB::transaction(function () use ($product) {
            $product->delete();
            ProductImage::query()->where('product_id', $product->id)->delete();
            SeoItem::query()->where('ref_id', $product->id)->delete();
            File::deleteDirectory('products/' . $product->id);
        });
    }
    public function render()
    {
        $products= Product::query()->latest()
            ->with('category', 'coverImage')
            ->paginate(10);
        return view('livewire.admin.product.index',[
            'products' => $products
        ])->layout('layouts.admin.app');
    }
}
