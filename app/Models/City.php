<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = [];

    public function submit($formData, $cityId)
    {

        City::query()->updateOrCreate(
            [
                'id' => $cityId
            ],
            [
                'name' => $formData['name'],
                'state_id' => $formData['stateId'],
            ]
        );
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
