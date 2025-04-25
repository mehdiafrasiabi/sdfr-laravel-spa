<?php

namespace App\Livewire\Admin\Student;

use App\Models\PersonalInformation;
use App\Models\User;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Information extends Component
{
    use SEOTools;
    public $studentId;
    public $studentName;
    public $identityData =null;
    public $loadingId = null;
    public $accessToken = '9d54cf3040ba4847a997c1b6e70d5b5b';

    public function mount(User $student)
    {
        $this->studentId = $student->id;
        $this->studentName = $student->name;
        $this->seoConfig();

    }
    public function seoConfig()
    {
        $this->seo()
            ->setTitle('اطلاعات احراز '.$this->studentName);
    }
    public function changeStatus($contactId, $value)
    {
        $validator = Validator::make(['status' => $value, 'id' => $contactId],
            [
                'id' => 'required|exists:personal_information,id',
                'status' => 'required|in:pending,completed,cancelled'
            ],
            [
                '*.required' => 'فیلد اجیاری است.',
                'status.in' => 'فرمت اشتباه است',
                'id.exists' => 'وضعیت اطلاعات نامعتبر'
            ]
        );
        $validator->validate();
        $this->resetValidation();
        $this->dispatch('success', 'با موفقیت ثبت شد');

        PersonalInformation::query()->updateOrCreate(
            [
                'id' => $contactId
            ],
            [
                'status' => $value
            ]);
    }

    public function getStatusColor($status)
    {
        switch ($status) {
            case 'pending':
                return 'primary';
            case 'cancelled':
                return 'danger';
            case 'completed':
                return 'success';

        }
    }


    public function fetchIdentity($infoId)
    {
        $info = PersonalInformation::find($infoId);
        if (!$info) {
            $this->dispatch('error', 'اطلاعات پیدا نشد');
            return;
        }

        $this->loadingId = $infoId;

        try {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $this->accessToken,
                'Content-Type' => 'application/json',
            ])->post('https://api.zibal.ir/v1/facility/nationalIdentityInquiry/', [
                'nationalCode' => $info->code_mell,
                'birthDate' => jalali($info->birth_date)->format('Y/m/d'),
            ]);

            $json = $response->json();

            if (isset($json['result']) && $json['result'] == 1 && $json['data']['matched']) {
                $this->identityData = $json['data'];
                $this->dispatch('success', 'اطلاعات با موفقیت دریافت شد');
            } else {
                // ذخیره پیام خطای برگشتی
                $this->identityData = [
                    'error' => $json['message'] ?? 'خطای ناشناخته‌ای رخ داده است.'
                ];
                $this->dispatch('error', $json['message'] ?? 'خطا در استعلام');
            }

        } catch (\Exception $e) {
            $this->identityData = [
                'error' => 'ارتباط با سرور برقرار نشد.'
            ];
            $this->dispatch('error', 'خطا در اتصال به سرور');
        }

        $this->loadingId = null;
    }

    public function render()
    {
        $information = PersonalInformation::query()
            ->where('student_id', $this->studentId)
            ->get()
            ->map(function ($item) {
                $item->statusColor = $this->getStatusColor($item->status);
                return $item;
            });

        return view('livewire.admin.student.information',
            ['information' => $information]
        )->layout('layouts.admin.app');
    }
}
