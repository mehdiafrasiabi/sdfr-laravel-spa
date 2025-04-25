<?php

namespace App\Livewire\Admin\State;

use App\Models\Country;
use App\Models\State;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination,SEOTools;

    public $name;
    public $countryId2;
    public $stateId;
    public $countries = [];

    public function mount()
    {
        $this->countries = Country::all();
        $this->seoConfig();
    }
    public function seoConfig()
    {
        $this->seo()
            ->setTitle('استان ها');
    }

    public function submit($formData, State $state)
    {
        $validator = Validator::make($formData, [
            'name' => 'required|string|max:55',
            'countryId' => 'required|exists:countries,id',
        ], [
            '*.required' => 'فیلد ضروری است',
            '*.string' => 'فرمت نوشتاری شما اشتباه است ',
            '*.max' => 'حداکثر نوشتن : 55 کارکتر',
            'countryId.exists' => 'کشور نامعتبر است',
        ]);
        $validator->validate();
        $state->submit($formData, $this->stateId);
        $this->reset();
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
    }

    public function edit($state_id)
    {
        $state = State::query()->where('id', $state_id)->first();
        if ($state) {
            $this->name = $state->name;
            $this->stateId = $state->id;
            $this->countryId2 = $state->country_id;
        }
    }

    public function delete($state_id)
    {
        State::query()->where('id', $state_id)->delete();
        $this->dispatch('success', 'با موفقیت حدف شد');
    }

    public function render()
    {
        $states = State::query()
            ->with('country')
            ->paginate(10);
        return view('livewire.admin.state.index',
            ['states' => $states])
            ->layout('layouts.admin.app');
    }
}
