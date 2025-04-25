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

class Barnameh extends Component
{
    use WithPagination,WithFileUploads,SEOTools;
    public $title;
    public $barnameh;
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
            ->setTitle('برنامه های '.$this->studentName);
    }
    public function submit($formData)
    {

        if ($this->barnameh) {
            $formData['barnameh'] = $this->barnameh;
        }

        $validator = Validator::make($formData, [
            'title' => 'required|string|max:50',
            'barnameh' => 'required|mimes:pdf,png,jpeg|max:61440',//60MB
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            'barnameh.mimes' => 'فرمت های مجاز آپلود فایل : pdf,png,jpeg !',
            'barnameh.max' => 'سایز فایل ارسالی حداکثر : ! 2MB',
        ]);

        $validator->validate();
        $this->resetValidation();

        $barnamehFilename = pathinfo($this->barnameh->hashName(), PATHINFO_FILENAME) . '.' . $this->barnameh->extension();

        \App\Models\Barnameh::query()->create([
            'title' => $formData['title'],
            'barnameh' => $barnamehFilename,
            'student_id' => $this->studentId,
        ]);

        Storage::disk('public')->put('student/'.$this->studentId.'/plan/',$this->barnameh);
        $this->dispatch('success','با موفقیت اضافه شد .');
    }

    public function delete(\App\Models\Barnameh $barnameh)
    {
        $barnamehFile = $barnameh->barnameh;
        File::delete('student/'.$this->studentId.'/plan/'.$barnamehFile);
        $barnameh->delete();
        $this->dispatch('success','با موفقیت حذف شد .');
    }
    public function render()
    {
        $plans = \App\Models\Barnameh::query()->paginate(10);
        return view('livewire.admin.student.barnameh',
        ['plans' => $plans]
        )->layout('layouts.admin.app');
    }
}
