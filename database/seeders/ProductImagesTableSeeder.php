<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_images')->delete();
        
        \DB::table('product_images')->insert(array (
            0 => 
            array (
                'id' => 1,
                'path' => 'gxMdMJY9Jo9OFshWhoMc9NNNp7LZX1ATjLP5rSiw.webp',
                'is_cover' => 0,
                'product_id' => 1,
                'deleted_at' => '2025-03-27 22:37:03',
                'created_at' => '2025-03-27 21:49:41',
                'updated_at' => '2025-03-27 22:37:03',
            ),
            1 => 
            array (
                'id' => 2,
                'path' => 'jRRqA9WYqLMspj4JjgSgYoeji2izhp6kpvFg6mmY.webp',
                'is_cover' => 0,
                'product_id' => 1,
                'deleted_at' => '2025-03-27 22:37:14',
                'created_at' => '2025-03-27 22:03:54',
                'updated_at' => '2025-03-27 22:37:14',
            ),
            2 => 
            array (
                'id' => 3,
                'path' => 'Zi6PZouny4FQLBlO5S6fo41G0EO1z809h7RZYnZs.webp',
                'is_cover' => 1,
                'product_id' => 1,
                'deleted_at' => '2025-03-27 22:37:38',
                'created_at' => '2025-03-27 22:37:21',
                'updated_at' => '2025-03-27 22:37:38',
            ),
            3 => 
            array (
                'id' => 4,
                'path' => 'uR9rKozNvqkMY5m3im9zwbGftPUFK8IUCCnwPv56.webp',
                'is_cover' => 1,
                'product_id' => 1,
                'deleted_at' => '2025-03-27 23:07:13',
                'created_at' => '2025-03-27 22:37:42',
                'updated_at' => '2025-03-27 23:07:13',
            ),
            4 => 
            array (
                'id' => 5,
                'path' => 'RIGl7SEDEZBl4vRpuIeimkPDKQqRIL5ZwPpuhv0x.webp',
                'is_cover' => 1,
                'product_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-03-27 23:07:32',
                'updated_at' => '2025-03-27 23:07:32',
            ),
            5 => 
            array (
                'id' => 6,
                'path' => 'LKoLCrxgMBus7SYUlGQMAdzxX1i3lP3OcbRjfO4i.webp',
                'is_cover' => 1,
                'product_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-03-27 23:27:16',
                'updated_at' => '2025-03-27 23:27:16',
            ),
            6 => 
            array (
                'id' => 7,
                'path' => 'ANUponeG226L4ai6DITrObwfK5VqKHwGksDoixRD.webp',
                'is_cover' => 1,
                'product_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-03-27 23:30:09',
                'updated_at' => '2025-03-27 23:30:09',
            ),
        ));
        
        
    }
}