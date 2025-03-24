<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('cities')->delete();

        \DB::table('cities')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'اراک',
                    'state_id' => 28,
                    'created_at' => '2025-02-20 22:29:59',
                    'updated_at' => '2025-02-20 22:29:59',
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'اردبیل',
                    'state_id' => 3,
                    'created_at' => '2025-02-20 22:30:13',
                    'updated_at' => '2025-02-20 22:30:13',
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'ارومیه',
                    'state_id' => 2,
                    'created_at' => '2025-02-20 22:30:46',
                    'updated_at' => '2025-02-20 22:30:46',
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'اصفهان',
                    'state_id' => 4,
                    'created_at' => '2025-02-20 22:30:57',
                    'updated_at' => '2025-02-20 22:30:57',
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'اهواز',
                    'state_id' => 13,
                    'created_at' => '2025-02-20 22:31:11',
                    'updated_at' => '2025-02-20 22:31:11',
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'ایلام',
                    'state_id' => 6,
                    'created_at' => '2025-02-20 22:31:23',
                    'updated_at' => '2025-02-20 22:31:23',
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'بجنورد',
                    'state_id' => 12,
                    'created_at' => '2025-02-20 22:31:35',
                    'updated_at' => '2025-02-20 22:31:35',
                ),
            7 =>
                array (
                    'id' => 8,
                    'name' => 'بندرعباس',
                    'state_id' => 29,
                    'created_at' => '2025-02-20 22:31:45',
                    'updated_at' => '2025-02-20 22:31:45',
                ),
            8 =>
                array (
                    'id' => 9,
                    'name' => 'بوشهر',
                    'state_id' => 7,
                    'created_at' => '2025-02-20 22:32:38',
                    'updated_at' => '2025-02-20 22:32:38',
                ),
            9 =>
                array (
                    'id' => 10,
                    'name' => 'بیرجند',
                    'state_id' => 10,
                    'created_at' => '2025-02-20 22:32:46',
                    'updated_at' => '2025-02-20 22:32:46',
                ),
            10 =>
                array (
                    'id' => 11,
                    'name' => 'تبریز',
                    'state_id' => 1,
                    'created_at' => '2025-02-20 22:32:57',
                    'updated_at' => '2025-02-20 22:32:57',
                ),
            11 =>
                array (
                    'id' => 12,
                    'name' => 'تهران',
                    'state_id' => 8,
                    'created_at' => '2025-02-20 22:33:07',
                    'updated_at' => '2025-02-20 22:33:07',
                ),
            12 =>
                array (
                    'id' => 13,
                    'name' => 'خرم‌آباد',
                    'state_id' => 26,
                    'created_at' => '2025-02-20 22:33:18',
                    'updated_at' => '2025-02-20 22:33:18',
                ),
            13 =>
                array (
                    'id' => 14,
                    'name' => 'رشت',
                    'state_id' => 25,
                    'created_at' => '2025-02-20 22:33:33',
                    'updated_at' => '2025-02-20 22:33:33',
                ),
            14 =>
                array (
                    'id' => 15,
                    'name' => 'زاهدان',
                    'state_id' => 16,
                    'created_at' => '2025-02-20 22:33:45',
                    'updated_at' => '2025-02-20 22:33:45',
                ),
            15 =>
                array (
                    'id' => 16,
                    'name' => 'زنجان',
                    'state_id' => 14,
                    'created_at' => '2025-02-20 22:34:01',
                    'updated_at' => '2025-02-20 22:34:01',
                ),
            16 =>
                array (
                    'id' => 17,
                    'name' => 'ساری',
                    'state_id' => 27,
                    'created_at' => '2025-02-20 22:34:13',
                    'updated_at' => '2025-02-20 22:34:13',
                ),
            17 =>
                array (
                    'id' => 18,
                    'name' => 'سمنان',
                    'state_id' => 15,
                    'created_at' => '2025-02-20 22:34:27',
                    'updated_at' => '2025-02-20 22:34:27',
                ),
            18 =>
                array (
                    'id' => 19,
                    'name' => 'سنندج',
                    'state_id' => 20,
                    'created_at' => '2025-02-20 22:34:40',
                    'updated_at' => '2025-02-20 22:34:40',
                ),
            19 =>
                array (
                    'id' => 20,
                    'name' => 'شهرکرد',
                    'state_id' => 9,
                    'created_at' => '2025-02-20 22:34:55',
                    'updated_at' => '2025-02-20 22:34:55',
                ),
            20 =>
                array (
                    'id' => 21,
                    'name' => 'شیراز',
                    'state_id' => 17,
                    'created_at' => '2025-02-20 22:35:07',
                    'updated_at' => '2025-02-20 22:35:07',
                ),
            21 =>
                array (
                    'id' => 22,
                    'name' => 'قزوین',
                    'state_id' => 18,
                    'created_at' => '2025-02-20 22:35:31',
                    'updated_at' => '2025-02-20 22:35:31',
                ),
            22 =>
                array (
                    'id' => 23,
                    'name' => 'قم',
                    'state_id' => 19,
                    'created_at' => '2025-02-20 22:35:40',
                    'updated_at' => '2025-02-20 22:35:40',
                ),
            23 =>
                array (
                    'id' => 24,
                    'name' => 'کرج',
                    'state_id' => 5,
                    'created_at' => '2025-02-20 22:35:47',
                    'updated_at' => '2025-02-20 22:35:47',
                ),
            24 =>
                array (
                    'id' => 25,
                    'name' => 'کرمان',
                    'state_id' => 21,
                    'created_at' => '2025-02-20 22:35:56',
                    'updated_at' => '2025-02-20 22:35:56',
                ),
            25 =>
                array (
                    'id' => 26,
                    'name' => 'کرمانشاه',
                    'state_id' => 22,
                    'created_at' => '2025-02-20 22:36:09',
                    'updated_at' => '2025-02-20 22:36:09',
                ),
            26 =>
                array (
                    'id' => 27,
                    'name' => 'گرگان',
                    'state_id' => 24,
                    'created_at' => '2025-02-20 22:36:17',
                    'updated_at' => '2025-02-20 22:36:17',
                ),
            27 =>
                array (
                    'id' => 28,
                    'name' => 'مشهد',
                    'state_id' => 11,
                    'created_at' => '2025-02-20 22:36:27',
                    'updated_at' => '2025-02-20 22:36:27',
                ),
            28 =>
                array (
                    'id' => 29,
                    'name' => 'همدان',
                    'state_id' => 30,
                    'created_at' => '2025-02-20 22:36:36',
                    'updated_at' => '2025-02-20 22:36:36',
                ),
            29 =>
                array (
                    'id' => 30,
                    'name' => 'یاسوج',
                    'state_id' => 23,
                    'created_at' => '2025-02-20 22:36:46',
                    'updated_at' => '2025-02-20 22:36:46',
                ),
            30 =>
                array (
                    'id' => 31,
                    'name' => 'یزد',
                    'state_id' => 31,
                    'created_at' => '2025-02-20 22:36:58',
                    'updated_at' => '2025-02-20 22:36:58',
                ),
        ));


    }
}
