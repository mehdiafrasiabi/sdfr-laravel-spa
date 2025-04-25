<?php

namespace App\Livewire\Admin\Student;

use App\Models\Student;
use App\Models\User;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use Livewire\WithPagination;

class ReportMonthly extends Component
{
    use WithPagination,WithFileUploads,SEOTools;
    public $title;
    public $reportMonthly;
    public $studentName;
    public $studentId;

    public function mount(User $student)
    {
        $this->studentId = $student->id;
        $this->studentName = $student->name;
        $this->seoConfig();
    }
    public function seoConfig()
    {
        $this->seo()
            ->setTitle('گزارش های ماهانه '.$this->studentName);
    }
    public function submit($formData)
    {

        if ($this->reportMonthly) {
            $formData['report'] = $this->reportMonthly;
        }

        $validator = Validator::make($formData, [
            'title' => 'required|string|max:50',
            'report' => 'required|mimes:pdf,png,jpeg|max:61440',//60MB
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            'report.mimes' => 'فرمت های مجاز آپلود گزارش : pdf,png,jpeg !',
            'report.max' => 'سایز فایل ارسالی حداکثر : ! 2MB',
        ]);

        $validator->validate();
        $this->resetValidation();

        $reportFilename = pathinfo($this->reportMonthly->hashName(), PATHINFO_FILENAME) . '.' . $this->reportMonthly->extension();

        \App\Models\ReportMonthly::query()->create([
            'title' => $formData['title'],
            'report' => $reportFilename,
            'student_id' => $this->studentId,
        ]);

        Storage::disk('public')->put('student/'.$this->studentId.'/report_monthly/',$this->reportMonthly);
        $this->dispatch('success','با موفقیت اضافه شد .');
    }

    public function delete(\App\Models\ReportMonthly $reportMonthly)
    {
        $reportMonthlyFile = $reportMonthly->report;
        File::delete('student/'.$this->studentId.'/report_monthly/'.$reportMonthlyFile);
        $reportMonthly->delete();
        $this->dispatch('success','با موفقیت حذف شد .');
    }

    public function render()
    {
        $reports = \App\Models\ReportMonthly::query()->paginate(10);
        return view('livewire.admin.student.report-monthly',
        ['reports' => $reports]
        )->layout('layouts.admin.app');
    }
}
