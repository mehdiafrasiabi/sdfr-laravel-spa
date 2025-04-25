<?php

namespace App\Livewire\Admin\City;

use App\Models\City;
use App\Models\State;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination,SEOTools;

    public $cityId;

    public $name;
    public $stateId2;

    public $states = [];

    public function mount()
    {
        $this->states = State::all();
        $this->seoConfig();
    }

    public function seoConfig()
    {
        $this->seo()
            ->setTitle(' شهر ها');
    }

    public function submit($formData, City $city)
    {
        $validator = Validator::make($formData, [
            'name' => 'required|string|max:55',
            'stateId' => 'required|exists:states,id',
        ], [
            '*.required' => 'فیلد ضروری است',
            '*.string' => 'فرمت نوشتاری شما اشتباه است ',
            '*.max' => 'حداکثر نوشتن : 55 کارکتر',
            'stateId.exists' => 'کشور نامعتبر است',
        ]);
        $validator->validate();
        $city->submit($formData, $this->cityId);
        $this->reset();
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
    }

    public function edit($city_id)
    {
        $city = City::query()->where('id', $city_id)->first();
        if ($city) {
            $this->name = $city->name;
            $this->cityId = $city->id;
            $this->stateId2 = $city->state_id;
        }
    }

    public function delete($city_id)
    {
        City::query()->where('id', $city_id)->delete();
        $this->dispatch('success', 'با موفقیت حدف شد');
    }

    public function render()
    {
        $cities = City::query()
            ->with('state')
            ->paginate(10);
        return view('livewire.admin.city.index', [
            'cities' => $cities
        ])->layout('layouts.admin.app');
    }
}
