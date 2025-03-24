<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Content extends Component
{
    public $productName;
    public $description;
    public $productId;

    public function mount(Product $product)
    {
        $this->productName = $product->name;
        $this->productId = $product->id;
        $this->description = $product->description;

    }

    public function submit($formData , Product $product)
    {
        $formData['description'] = $this->description;

        $validator = Validator::make($formData, [
            'description' => 'required|string',
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
        ]);

        $validator->validate();
        $this->resetValidation();
        $product->submitProductContent($formData,$this->productId);
        $this->redirect(route('admin.product.index'));
        session()->flash('success', 'محتوای محصول با موفقیت ثبت شد');

    }

    public function render()
    {
        return view('livewire.admin.product.content')->layout('layouts.admin.app');
    }
}
