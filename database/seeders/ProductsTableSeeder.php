<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'سکوی پرتاب',
                'title' => 'حرکتی سریع و تازه در فضا',
                'tag' => 'کنکور-ریاضی',
                'course_time' => '30 روز',
                'meeting_time' => '25 جلسه',
                'price' => 499000,
                'description' => '<p><span style="color:#ffffff"><span style="background-color:#3498db">این پکیج برای آن دسته از افرادی است که به دنبال یک&nbsp;شروع هوشمندانه&nbsp;هستند. فرصتی برای آشنایی با خدمات ما و تست متد SDFR تا از کیفیت و اثربخشی آن اطمینان حاصل کنند.</span></span></p>
',
                'category_id' => 1,
                'p_code' => 'sdfr-75626191',
                'deleted_at' => NULL,
                'created_at' => '2025-03-27 21:49:41',
                'updated_at' => '2025-03-27 23:19:21',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'توسعه و گستردگی در یادگیری',
                'title' => 'توسعه و گستردگی در یادگیری',
                'tag' => 'مشاوره تحصیلی',
                'course_time' => 'پایان سال تحصیلی',
                'meeting_time' => 'هفته ای یک جلسه',
                'price' => 15000000,
                'description' => '<p>با این پکیج وارد مرحله&zwnj;ای پیشرفته&zwnj;تر می&zwnj;شوید. مشاوره تخصصی با متد انحصاری SDFR،<span style="color:#c0392b">&nbsp;دوره&zwnj;های روانشناسی و برنامه&zwnj;های ورزشی حرفه&zwnj;ای،</span> شما را در مسیری قرار می&zwnj;دهد که نه&zwnj;تنها در تحصیل، بلکه در جنبه&zwnj;های مختلف زندگی نیز پیشرفت کنید.</p>

<p>&nbsp;</p>
',
                'category_id' => 1,
                'p_code' => 'SDFR-49785',
                'deleted_at' => NULL,
                'created_at' => '2025-03-27 23:27:16',
                'updated_at' => '2025-03-27 23:31:14',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'کوانتوم',
                'title' => 'دستیابی به مفاهیم عمیق ',
                'tag' => 'دوازدهم',
                'course_time' => 'پایان سال تحصیلی',
                'meeting_time' => 'هفته ای یک جلسه',
                'price' => 25000000,
                'description' => '<p>این پکیج برای افرادی طراحی شده که به دنبال یک تجربه لوکس و استثنایی هستند. در &#39;کوانتوم&#39;، شما&nbsp;به طور مستقیم با <span style="color:#c0392b">بنیان&zwnj;گذاران SDFR&nbsp;</span>در ارتباط خواهید بود و از<span style="color:#c0392b"> مشاوره&zwnj;های فوق&zwnj;تخصصی</span> و خدماتی بی&zwnj;نظیر بهره&zwnj;مند خواهید شد که تضمین&zwnj;کننده موفقیت شماست.</p>

<p>&nbsp;</p>
',
                'category_id' => 2,
                'p_code' => 'SDFR-43352',
                'deleted_at' => NULL,
                'created_at' => '2025-03-27 23:30:09',
                'updated_at' => '2025-03-27 23:30:52',
            ),
        ));
        
        
    }
}