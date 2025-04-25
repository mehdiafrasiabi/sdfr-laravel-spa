<?php

namespace App\Livewire\Admin\Product;

use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads,SEOTools;

    public $photos = [];
    public $categories = [];
    public $coverIndex = 0;
    public $name;
    public $slug;
    public $productId;

    //edit
    public $product;
    public function mount()
    {
        if ($_GET and $_GET['product_id']) {
            $this->productId = $_GET['product_id'];
            $product=  $this->product = Product::query()
                ->with('seo','image')
                ->where('id', $this->productId)->firstOrFail();
            $this->name = $product->name;
            $this->slug = $product->seo->slug;
        }

        $this->categories = Category::all();

        $this->seoConfig();
    }
    public function seoConfig()
    {
        $this->seo()
            ->setTitle('افزودن محصول');
    }
    public function updatedName()
    {
        $this->slug = Str::slug($this->name, '-',null);
    }
    public function submit($formData,Product $product)
    {
        $formData['photos'] = $this->photos;
        $formData['coverIndex'] = $this->coverIndex;
        $validator = Validator::make($formData, [
            'photos.*' => 'required|image|mimes:jpeg,png,jpg,gif,webp',
            'name' => 'required|string',
            'title' => 'required|string|max:30',
            'course_time' => 'required|string|max:30',
            'meeting_time' => 'required|string|max:30',
            'tag' => 'required|string',
            'slug' => 'required|string',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'price' => 'required|integer',
            'categoryId' => 'required|exists:categories,id',
            'coverIndex' => 'required',
        ], [

            'coverIndex.required' => 'یکی از تصاویر را به عنوان کاور محصول انتخاب کنید .',
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            '*.integer' => 'این فیلد باید از نوع عددی باشد!',
            '*.min' => 'حداقل تعداد کاراکترها : 50',
            '*.max' => 'حداکثر تعداد کاراکترها : 30',
            'categoryId.exists' => 'دسته بندی نامعتبر است .',
            'photos.*.image' => 'فرمت نامعتبر است .',

        ]);
        $validator->validate();
        $this->resetValidation();
        $product->submit($formData , $this->productId , $this->photos,$this->coverIndex);
        $this->redirect(route('admin.product.index'));
        session()->flash('success','عملیات با موفقیت انجام شد .');
    }
    public function setCoverImage($index)
    {
        $this->coverIndex = $index;
    }
    public function removePhoto($index)
    {
        if ($index === $this->coverIndex){
            $this->coverIndex = null;
        }
        array_splice($this->photos, $index, 1);
    }
    /////// Edit
    public function removeOldPhoto(ProductImage $productImage , $productId)
    {
        $productImage->delete();
        \Illuminate\Support\Facades\File::delete(public_path('products/' . $productId . '/photo/' . $productImage->path));
    }

    public function setOldCoverImage($photoId)
    {
        ProductImage::query()->where([
            'product_id'=> $this->productId,
            'id'=> $photoId
        ])->update(['is_cover' => true]);
        $this->dispatch('success','تصویر کاور با موفقیت تغییر کرد .');
    }

    public function render()
    {
        return view('livewire.admin.product.create.index')->layout('layouts.admin.app');
    }
}
