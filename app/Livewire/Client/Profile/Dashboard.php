<?php

namespace App\Livewire\Client\Profile;

use App\Models\Student;
use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;

class Dashboard extends Component
{
    use SEOTools;
    public $studentCourses = [];

    public function mount()
    {
        $student = Student::with(['payment.order.orderItems.product'])
            ->whereHas('payment', function ($q) {
                $q->where('status', 'completed');
            })
            ->first();

        if ($student && $student->payment && $student->payment->order) {
            foreach ($student->payment->order->orderItems as $item) {
                if ($item->product) {
                    $this->studentCourses[] = $item->product->name;
                }
            }
        }
        $this->seoConfig();
    }

    public function seoConfig()
    {
        $this->seo()
            ->setTitle('پیشخوان');
    }

    public function render()
    {
        return view('livewire.client.profile.dashboard', [
            'studentCourses' => $this->studentCourses
        ])->layout('layouts.client.app');
    }
}
