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
                'slug' => 'woman-models',
                'name' => 'Woman Models',
                'image' => 'img_002.webp',
                'created_at' => '2023-11-05 18:38:23',
                'updated_at' => '2023-11-05 18:38:23',
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'man-models',
                'name' => 'Man Models',
                'image' => 'img_003.webp',
                'created_at' => '2023-11-05 18:38:23',
                'updated_at' => '2023-11-05 18:38:23',
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'kids-and-baby-models',
                'name' => 'Kids & Baby Models',
                'image' => 'img_004.webp',
                'created_at' => '2023-11-05 18:38:23',
                'updated_at' => '2023-11-05 18:38:23',
            ),
        ));
        
        
    }
}