<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryFeaturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_features')->delete();
        
        \DB::table('category_features')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'ریاضی',
                'category_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-03-24 08:35:57',
                'updated_at' => '2025-03-24 08:35:57',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'تجربی',
                'category_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-03-24 08:36:01',
                'updated_at' => '2025-03-24 08:36:01',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'انسانی',
                'category_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2025-03-24 08:36:06',
                'updated_at' => '2025-03-24 08:36:06',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'ریاضی',
                'category_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-03-24 08:36:14',
                'updated_at' => '2025-03-24 08:36:14',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'تجربی',
                'category_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-03-24 08:36:19',
                'updated_at' => '2025-03-24 08:36:19',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'انسانی',
                'category_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-03-24 08:36:24',
                'updated_at' => '2025-03-24 08:36:24',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'ریاضی',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-03-24 08:36:33',
                'updated_at' => '2025-03-24 08:36:33',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'تجربی',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-03-24 08:36:38',
                'updated_at' => '2025-03-24 08:36:38',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'انسانی',
                'category_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-03-24 08:36:43',
                'updated_at' => '2025-03-24 08:36:43',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'ریاضی',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-03-24 08:36:55',
                'updated_at' => '2025-03-24 08:36:55',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'تجربی',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-03-24 08:37:00',
                'updated_at' => '2025-03-24 08:37:00',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'انسانی',
                'category_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-03-24 08:37:05',
                'updated_at' => '2025-03-24 08:37:05',
            ),
        ));
        
        
    }
}