<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{

    protected $guarded = [];
    public function submit($formData)
    {
        ContactUs::query()->create(
            [
            'name' => $formData['name'],
            'mobile' => $formData['mobile'],
            'text' => $formData['text'],
            ]
        );
    }
}
