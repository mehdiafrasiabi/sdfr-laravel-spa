<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamStudent extends Model
{
    use HasFactory;

    protected $table = 'exam_user'; // چون اسم جدول غیرمرسومه
    protected $guarded = [];

    // آزمونی که این کاربر قراره درش شرکت کنه
    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    // کاربری که این آزمون برای او تعریف شده
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // پاسخ‌هایی که این کاربر برای این آزمون داده
    public function answers()
    {
        return $this->hasMany(ExamAnswer::class, 'exam_user_id');
    }
}
