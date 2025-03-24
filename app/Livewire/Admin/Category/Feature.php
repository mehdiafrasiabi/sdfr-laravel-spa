<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use App\Models\CategoryFeature;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Feature extends Component
{
    use WithPagination;

    public $name;
    public $categoryName;
    public $categoryId;
    public $featureId;

    public function mount(Category $category)
    {
        $this->categoryName = $category->name;

        $this->categoryId = $category->id;
    }

    public function submit($formData, CategoryFeature $categoryFeature)
    {

        $validator = Validator::make($formData, [
            'name' => 'required|string|max:50',
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            '*.max' => 'حداکثر تعداد کاراکترها : 50',
        ]);

        $validator->validate();
        $this->resetValidation();
        $categoryFeature->submitCategoryFeature($formData, $this->categoryId, $this->featureId);
        $this->reset('name');
        $this->dispatch('success', 'عملیات با موفقیت انجام شد!');

    }

    public function edit($categoryId)
    {

        $categoryFeature = CategoryFeature::query()->where('id', $categoryId)->first();

        if ($categoryFeature) {
            $this->name = $categoryFeature->name;
            $this->featureId = $categoryFeature->id;
            $this->categoryId = $categoryFeature->category_id;
        }

    }

    public function delete($categoryId)
    {

        CategoryFeature::query()->where('id', $categoryId)->delete();
        $this->dispatch('success', 'عملیات حذف با موفقیت انجام شد!');

    }

    public function render()
    {
        $categoryFeatures = CategoryFeature::query()
            ->where('category_id', $this->categoryId)
            ->with('categoryFeature')
            ->paginate(10);
        return view('livewire.admin.category.feature',
            [
                'categoryFeatures' => $categoryFeatures
            ])
            ->layout('layouts.admin.app');
    }
}
