<?php

namespace App\Livewire\Client\Profile;

use App\Models\ReportMonthly;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Barnameh extends Component
{
    use WithPagination,SEOTools;

    public function mount()
    {
       $this->seoConfig();
    }
    public function seoConfig()
    {
        $this->seo()
            ->setTitle('برنامه و گزارش های من')
            ->setDescription('برنامه و گزارش های من');
    }
    public function render()
    {
        $plans = \App\Models\Barnameh::query()
            ->where('student_id', Auth::id())
            ->latest()
            ->paginate(12);

        $reportMonthly = ReportMonthly::query()
            ->where('student_id', Auth::id())
            ->latest()
            ->paginate(12);

        return view('livewire.client.profile.barnameh', [
            'plans' => $plans,
            'reportMonthly' => $reportMonthly
        ]);
    }
}
