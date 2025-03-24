<?php

namespace App\Livewire\Admin\Payment;

use App\Models\PaymentMethod;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $name;
    public $merchantCode;
    public $paymentId;

    public function submit($formData, PaymentMethod $paymentMethod)
    {
        $validator = Validator::make($formData, [
            'name' => 'required|string|max:55',
            'merchantCode' => 'required|string|max:55',
        ], [
            '*.required' => 'فیلد ضروری است',
            '*.string' => 'فرمت نوشتاری شما اشتباه است ',
            '*.integer' => 'فرمت نوشتاری شما اشتباه است با اعداد اینگلیسی بنویسید',
            '*.max' => 'حداکثر نوشتن : 55 کارکتر',
        ]);
        $validator->validate();
        $paymentMethod->submit($formData, $this->paymentId);
        $this->reset();
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
    }

    public function edit($payment_id)
    {
        $payment = PaymentMethod::query()->where('id', $payment_id)->first();
        if ($payment) {
            $this->name = $payment->name;
            $this->merchantCode = $payment->merchant_id;
            $this->paymentId = $payment->id;
        }
    }

    public function delete($payment_id)
    {
        PaymentMethod::query()->where('id', $payment_id)->delete();
        $this->dispatch('success', 'با موفقیت حدف شد');
    }

    public function changeStatus(PaymentMethod $payment)
    {
        if ($payment->active) {
            $payment->update(['active' => false]);
        } else {
            $payment->update(['active' => true]);
        }
        $this->dispatch('success', ' عملیات با موفقیت انجام شد');

    }

    public function render()
    {
        $paymentMethod = PaymentMethod::query()->paginate(10);
        return view('livewire.admin.payment.index', [
            'paymentMethod' => $paymentMethod
        ])->layout('layouts.admin.app');
    }
}
