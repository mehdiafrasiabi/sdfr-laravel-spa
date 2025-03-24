<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    //
    protected $guarded = [];
    public function submit($formData, $paymentId)
    {
        PaymentMethod::query()->updateOrCreate(
            [
                'id' => $paymentId,
            ],
            [
                'name' => $formData['name'],
                'merchant_id' => $formData['merchantCode'],
            ]
        );
    }
}
