<?php
namespace App\Livewire\Admin\Student;

use App\Models\Student;
use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination,SEOTools;

    public $search = ''; // جستجو در نام دانش‌آموز
    public $course_id = ''; // دریافت دوره از URL

    public function mount()
    {
        // دریافت پارامتر course_id از URL
        $this->course_id = request()->query('course_id', '');
        $this->seoConfig();
    }
    public function seoConfig()
    {
        $this->seo()
            ->setTitle('دانش آموزان');
    }
    public function render()
    {
        $studentsQuery = Student::query()->with('payment.order.orderItems.product', 'payment.order.user');

        // اگر جستجو فعال بود، آن را اعمال می‌کنیم
        if ($this->search) {
            $studentsQuery->whereHas('payment.order.user', function ($query) {
                // بررسی جستجو در نام کاربر
                $query->where('name', 'like', '%' . $this->search . '%');
            });
        }

        // فیلتر بر اساس دوره از URL
        if ($this->course_id && $this->course_id != 'all') {
            $studentsQuery->whereHas('payment.order.orderItems.product', function ($query) {
                // فیلتر بر اساس ID محصول
                if ($this->course_id == 1) {
                    $query->where('id', 1); // کوانتوم و توسعه
                } elseif ($this->course_id == 2) {
                    $query->where('id', 2); // سکوی پرتاب
                } elseif ($this->course_id == 3) {
                    $query->where('id', 3); // دوره‌های دیگر
                }
            });
        }

        // صفحه‌بندی نتایج
        $students = $studentsQuery->paginate(10);

        return view('livewire.admin.student.index', [
            'students' => $students,
        ])->layout('layouts.admin.app');
    }
}
