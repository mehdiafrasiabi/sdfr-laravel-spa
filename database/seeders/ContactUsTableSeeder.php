<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactUsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contact_us')->delete();
        
        \DB::table('contact_us')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'مهدی آبان',
                'mobile' => '09940682693',
                'text' => 'سلام خسته نباشید من دانش اموز کنکوری هستم و خیلی نگران ام لطقفا با مم تماس بگیرید',
                'status' => 'pending',
                'created_at' => '2025-03-27 23:35:55',
                'updated_at' => '2025-03-27 23:35:55',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'بهشاد اتقیایی',
                'mobile' => '09028488061',
                'text' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنانز',
                'status' => 'completed',
                'created_at' => '2025-03-27 23:36:50',
                'updated_at' => '2025-03-27 23:37:32',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'حریربافان',
                'mobile' => '09121234567',
                'text' => 'سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.',
                'status' => 'canceled',
                'created_at' => '2025-03-27 23:37:13',
                'updated_at' => '2025-03-27 23:37:36',
            ),
        ));
        
        
    }
}