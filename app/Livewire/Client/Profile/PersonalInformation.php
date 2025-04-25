<?php

namespace App\Livewire\Client\Profile;

use App\Models\City;
use App\Models\ContactUs;
use App\Models\State;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Morilog\Jalali\Jalalian;

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
    function convertPersianToEnglish($string)
    {
        $persian = ['۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'];
        $english = ['0','1','2','3','4','5','6','7','8','9'];
        return str_replace($persian, $english, $string);
    }
    public function submit($formData)
    {
        $birthDateRaw = $this->convertPersianToEnglish($formData['birth_date']);
        $birthDate = Jalalian::fromFormat('Y/m/d', $birthDateRaw)->toCarbon();

        $validator = Validator::make($formData,
        [
            'name' => 'required|string|max:35',
            'address' => 'required|string|max:200',
            'placeOfBirth' => 'required|string|max:35',
            'fName' => 'required|string|max:35',
            'codeMell' => 'required|numeric|min:10',
            'birth_date' => 'required',
            'province' => 'required|exists:states,id',
            'city' => 'required|exists:cities,id',
            'fMobile' => ['required','min:11','regex:/^09\d{9}$/'],
            'mMobile' => ['required','min:11','regex:/^09\d{9}$/'],
        ],
            [
                '*.required' => 'فیلد ضروری است.',
                '*.string' => 'فرمت اشتباه است !',
                '*.numeric' => 'این فیلد باید از نوع عددی باشد!',
                'codeMell.min' => 'کدملی 10 رقمی است !',
                'fMobile.min' => 'شماره موبایل 11 رفم است :09151234567!',
                'mMobile.min' => 'شماره موبایل 11 رفم است :09151234567!',
                '*.min' => 'حداقل تعداد کاراکترها : 50',
                'address.max' => 'حداکثر تعداد کاراکتر آدرس : 200',
                '*.max' => 'حداکثر تعداد کاراکترها : 35',
                'fMobile.regex' => 'شماره موبایل نامعتبر است!',
                'mMobile.regex' => 'شماره موبایل نامعتبر است!',
                'states.exists' => 'استان نامعتبر است .',
                'cities.exists' => 'شهر نامعتبر است .',
            ]

        );
        $validator->validate();

        \App\Models\PersonalInformation::updateOrCreate(
            ['student_id' => Auth::id()], // شرط وجود رکورد
            [
                'name' => $formData['name'],
                'address' => $formData['address'],
                'place_of_birth' => $formData['placeOfBirth'],
                'father_name' => $formData['fName'],
                'code_mell' => $formData['codeMell'],
                'father_mobile' => $formData['fMobile'],
                'mother_Mobile' => $formData['mMobile'],
                'birth_date' =>$birthDate,
                'state_id' => $formData['province'],
                'city_id' => $formData['city'],
                'status' => 'pending', // همیشه بعد از ثبت یا بروزرسانی، حالت باید pending بشه
            ]
        );

        $this->reset();
        $this->dispatch('success','سپاس! اطلاعات شما با موفقیت ثبت شد. لطفاً منتظر تأیید کارشناسان باشید.');
    }


    public function render()
    {
        $personals = \App\Models\PersonalInformation::query()->where('student_id','=',Auth::id())->first();
        return view('livewire.client.profile.personal-information',['personals'=>$personals]);
    }
}
