<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamAnswer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function examUser()
    {
        return $this->belongsTo(ExamStudent::class);
    }
}
