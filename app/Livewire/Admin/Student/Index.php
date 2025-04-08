<?php

namespace App\Livewire\Admin\Student;

use App\Models\Student;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;


    public function render()
    {
        $students = Student::query()->with('payment.order.orderItems.product')->paginate(10);
        return view('livewire.admin.student.index',
        ['students' => $students]
        )->layout('layouts.admin.app');
    }
}
