<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
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
                'text' => 'jpc1',
                'value' => 'jpc1',
                'color' => '0',
                'flag' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'text' => 'jpc2',
                'value' => 'jpc2',
                'color' => '0',
                'flag' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'text' => 'jpc3',
                'value' => 'jpc3',
                'color' => '0',
                'flag' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'text' => 'jpc4',
                'value' => 'jpc4',
                'color' => '0',
                'flag' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}