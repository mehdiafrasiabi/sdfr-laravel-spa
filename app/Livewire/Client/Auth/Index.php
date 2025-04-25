<?php

namespace App\Livewire\Client\Auth;

use App\Models\User;
use App\Notifications\SendSmsNotification;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;
use Livewire\Component;


class Index extends Component
{
    use SEOTools;
    public $submitCodeView = false;
    public $sendSmsError = '';
    public $userMobile;
    public $otpCode;
    public $codeErrorMessage;


    public function mount()
    {
        $this->seoConfig();
    }

    public function seoConfig()
    {
        $this->seo()
            ->setTitle('ورود|ثبت نام')
            ->setDescription('ورود به پنل کاربری');
    }

    public function sendSms($formData)
    {

        $validator = Validator::make($formData, [
            'mobile' => ['required', 'regex:/^09\d{9}$/'],
        ], [
            'required' => 'شماره موبایل الزامی است !',
            'regex' => 'شماره موبایل نامعتبر است!',
        ]);

        $validator->validate();
        $this->resetValidation();

        $activeCode = mt_rand(1000, 9999);

        $notification = new SendSmsNotification($formData['mobile'],'Ghasedak',$activeCode);


        try {
            Notification::sendNow($formData['mobile'], $notification);

            $this->submitCodeView = true;
            $this->userMobile = $formData['mobile'];
            $this->otpCode = $activeCode;


        } catch (\Exception $e) {
            $this->sendSmsError = "متاسفانه پیامک ارسال نشد. خطا: " . $e->getMessage();
        }
    }
    public function submitCode($formData)
    {

        $this->codeErrorMessage = false;

        $validator = Validator::make($formData, [
            'code' => ['required', 'numeric', 'digits:4'],
        ], [
            'required' => 'لطفا این قسمت را خالی نگذارید',
            'digits' => 'کد باید 4 رقمی باشد!',
        ]);

        $validator->validate();
        $this->resetValidation();

          if ($formData['code'] == $this->otpCode) {

            $existingUser = User::query()->where('mobile', $this->userMobile)->first();

            if (!$existingUser) {

                $newUser = User::query()->create(
                    [
                        'mobile' => $this->userMobile,
                    ],
                );

                Auth::login($newUser, true);
            } else {

                Auth::login($existingUser, true);
            }
            return redirect()->route('client.home');

        } else {
                $this->codeErrorMessage = 'کد نامعتبر است !';
          }

    }
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();

    }

    public function handleProviderCallback()
    {
        $gmailUser = Socialite::driver('google')->stateless()->user();
        $existingUser = User::query()->where('email', $gmailUser['email'])->first();
        if (!$existingUser) {
            $newUser = User::query()->updateOrCreate(
                [
                    'email' => $gmailUser['email'],
                ],
                [
                    'name' => $gmailUser['name'],
                ]
            );
            Auth::login($newUser , true);
        }else{
            Auth::login($existingUser , true);
        }
        return redirect()->route('client.home');
    }
    public function clientLogout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('client.auth.index');

    }

    public function render()
    {
        return view('livewire.client.auth.index')->layout('layouts.client.app-auth');
    }
}
