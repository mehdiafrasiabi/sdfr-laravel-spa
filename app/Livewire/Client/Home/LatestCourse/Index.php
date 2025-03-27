<?php

namespace App\Livewire\Client\Home\LatestCourse;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public $latestProducts;
    public function mount()
    {
        $latestProducts = Product::query()
            ->select('id', 'name','title','tag','price','meeting_time','course_time','p_code')
            ->with('coverImage','seo')
            ->get();
        $this->latestProducts = $latestProducts;
    }
    public function placeholder()
    {
        return view('Layouts.client.placeholders.first-page.latest-course-skeleton');
    }
    public function render()
    {
        return view('livewire.client.home.latest-course.index')->layout('layouts.client.app');
    }
}
