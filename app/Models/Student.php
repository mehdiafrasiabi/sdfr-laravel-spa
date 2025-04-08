<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function payment()
    {
        return $this->belongsTo(Payment::class)->where('status', '=','completed');
    }
}
