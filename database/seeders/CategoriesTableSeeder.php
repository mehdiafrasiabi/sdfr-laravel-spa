<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'کنکور',
                'category_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-03-24 08:35:27',
                'updated_at' => '2025-03-24 08:35:27',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'دوازدهم',
                'category_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-03-24 08:35:31',
                'updated_at' => '2025-03-24 08:35:31',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'یازدهم',
                'category_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-03-24 08:35:37',
                'updated_at' => '2025-03-24 08:35:37',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'دهم',
                'category_id' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-03-24 08:35:42',
                'updated_at' => '2025-03-24 08:35:42',
            ),
        ));
        
        
    }
}