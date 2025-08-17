<?php

namespace App\Livewire\Client\Profile;

use App\Models\Notification;
use Artesaos\SEOTools\Traits\SEOTools;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;

class Dashboard extends Component
{
    use SEOTools, WithPagination;

    public $student;




    public function mount()
    {
        $this->seoConfig();
        // این خط رو تغییر بدید تا مطمئن بشید student مقدار داره
        $this->student = Auth::user()->student ?? null;
    }

    public function seoConfig()
    {
        $this->seo()->setTitle('پیشخوان');
    }

    public function markAsRead($id)
    {
        // قبل از هر چیز، مطمئن شوید که student وجود دارد.
        if (!$this->student) {
            $this->dispatch('error', 'دانش‌آموز یافت نشد.');
            return;
        }

        // نوتیفیکیشن رو بر اساس student_id و id نوتیفیکیشن پیدا کنید
        $notif = Notification::where('id', $id)
            ->where('student_id', $this->student->id)
            ->first();

        // اگر نوتیفیکیشن پیدا شد، اون رو به‌روزرسانی کنید
        if ($notif) {
            $notif->update(['is_read' => true]);
            // پیام موفقیت رو ارسال کنید
            $this->dispatch('success', 'پیام با موفقیت خوانده شد.');
        } else {
            $this->dispatch('error', 'نوتیفیکیشن پیدا نشد.');
        }
    }

    public function render()
    {
        $supporterStudent= $this->student?->supporterStudent;
        $studentId = Auth::user()->student->id ?? null;
        $notifications = Notification::where('student_id', $studentId)->latest()->paginate(3);

        return view('livewire.client.profile.dashboard', [
            'supporterStudent' => $supporterStudent,
            'notifications' => $notifications,
        ])->layout('layouts.client.app');
    }
}

