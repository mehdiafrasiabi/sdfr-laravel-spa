<?php

namespace App\Livewire\Client\Profile;

use App\Models\City;
use App\Models\ContactUs;
use App\Models\State;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class PersonalInformation extends Component
{
    public $cities =[];
    public $provinces = [];
    public $city ='';
    public $province = '';
    public $name;
    public $address;
    public $placeOfBirth;
    public $fName;
    public $codeMell;
    public $fMobile;
    public $mMobile;

    public $mobile;
    public $text;
    use SEOTools;
    public function mount()
    {
        $this->seoConfig();
        $this->provinces = State::all();
    }
    public function getCity($value)
    {
        $this->cities = City::query()->where('state_id', $value)->get();
    }

    public function seoConfig()
    {
        $this->seo()
            ->setTitle('احراز هویت VIP');
    }
    public function submit($formData, \App\Models\PersonalInformation $personalInformation)
    {
        $validator = Validator::make($formData,
            [
                'name' => 'required|string|max:80',
                'address' => 'required|string|max:200',
                'placeOfBirth' => 'required|string|max:80',
                'fName' => 'required|string|max:80',
                'codeMell' => 'required|numeric',
                'birth_date' => 'required',
                'province' => 'required|exists:states,id',
                'city' => 'required|exists:cities,id',
                'fMobile' => ['required','min:11','regex:/^09\d{9}$/'],
                'mMobile' => ['required','min:11','regex:/^09\d{9}$/'],
            ],
            [
                '*.required'=>'فیلد اجباری است .',
                '*.string'=>'فرمت نوشتاری اشتباه است .',
                '*.min'=>'شمار موبایل همراه 11 رقم است .',
                'address.max'=>'تعداد کارکتر مجاز : 200 کارکتر',
                '*.max'=>'تعداد کارکتر مجاز : 80 کارکتر',
                '*.regex'=>'لطفا شماره موبایل خود را به درستی وارد کنید.',
            ]
        );
        $validator->validate();
        \App\Models\PersonalInformation::query()->create(
            [
                'name' => $formData['name'],
                'address' => $formData['address'],
                'place_of_birth' => $formData['placeOfBirth'],
                'father_name' => $formData['fName'],
                'code_mell' => $formData['codeMell'],
                'father_mobile' => $formData['fMobile'],
                'mother_Mobile' => $formData['mMobile'],
                'birth_date' => $formData['birth_date'],
                'state_id' => $formData['province'],
                'city_id' => $formData['city'],
                'student_id' => Auth::id(),

            ]
        );
        $this->reset();
        $this->dispatch('success','سپاس !کارشناسان ما به زودی احراز شمارا تایید خواهند کرد .');

    }

    public function render()
    {
        $personals = \App\Models\PersonalInformation::query()->where('student_id','=',Auth::id())->first();
        return view('livewire.client.profile.personal-information',['personals'=>$personals]);
    }
}
