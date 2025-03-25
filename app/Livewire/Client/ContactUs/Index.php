<?php

namespace App\Livewire\Client\ContactUs;

use App\Models\ContactUs;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{
    public $name;
    public $mobile;
    public $text;

    public function submit($formData,ContactUs $contactUs)
    {
        $validator = Validator::make($formData,
            [
                'name' => 'required|string|max:150',
                'mobile' => ['required','min:11','regex:/^09\d{9}$/'],
                'text' => 'string|max:150',
            ],
            [
                '*.required'=>'فیلد اجباری است .',
                '*.string'=>'فرمت نوشتاری اشتباه است .',
                '*.max'=>'حداکثر تعداد:150 کارکتر',
                '*.min'=>'شمار موبایل همراه 11 رقم است .',
                '*.regex'=>'لطفا شماره موبایل خود را به درستی وارد کنید.',
            ]
        );
        $validator->validate();
        $contactUs->submit($formData);
        $this->reset();
        $this->dispatch('success','سپاس !بزودی با شما تماس خواهیم گرفت .');

    }

    public function render()
    {
        return view('livewire.client.contact-us.index')->layout('layouts.client.app');
    }
}
