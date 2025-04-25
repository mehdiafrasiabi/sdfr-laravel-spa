<?php

namespace App\Livewire\Admin\Setting\GeneralSetting;

use App\Models\GeneralSetting;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function render()
    {
        $generalSetting = GeneralSetting::query()->paginate(10);
        return view('livewire.admin.setting.general-setting.index',
        ['generalSetting' => $generalSetting]
        )->layout('layouts.admin.app');
    }
}
