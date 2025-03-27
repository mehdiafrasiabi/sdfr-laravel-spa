<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SeoItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('seo_items')->delete();
        
        \DB::table('seo_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'سکوی-پرتاب',
                'meta_title' => 'سکوی-پرتاب',
                'meta_description' => '      این پکیج برای آن دسته از افرادی است که به دنبال یک شروع هوشمندانه هستند. فرصتی برای آشنایی با خدمات ما و تست متد SDFR تا از کیفیت و اثربخشی آن اطمینان حاصل کنند.',
                'ref_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-03-27 21:49:41',
                'updated_at' => '2025-03-27 23:07:32',
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'توسعه-و-گستردگی-در-یادگیری',
                'meta_title' => 'توسعه و گستردگی در یادگیری',
                'meta_description' => ' با این پکیج وارد مرحله‌ای پیشرفته‌تر می‌شوید. مشاوره تخصصی با متد انحصاری SDFR، دوره‌های روانشناسی و برنامه‌های ورزشی حرفه‌ای، شما را در مسیری قرار می‌دهد که نه‌تنها در تحصیل، بلکه در جنبه‌های مختلف زندگی نیز پیشرفت کنید.

',
                'ref_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-03-27 23:27:16',
                'updated_at' => '2025-03-27 23:27:16',
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'کوانتوم',
                'meta_title' => 'کوانتوم',
                'meta_description' => ' با این پکیج وارد مرحله‌ای پیشرفته‌تر می‌شوید. مشاوره تخصصی با متد انحصاری SDFR، دوره‌های روانشناسی و برنامه‌های ورزشی حرفه‌ای، شما را در مسیری قرار می‌دهد که نه‌تنها در تحصیل، بلکه در جنبه‌های مختلف زندگی نیز پیشرفت کنید.

',
                'ref_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-03-27 23:30:09',
                'updated_at' => '2025-03-27 23:30:09',
            ),
        ));
        
        
    }
}