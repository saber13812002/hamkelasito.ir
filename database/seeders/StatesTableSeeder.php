<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 1,
                'text' => 'state1',
                'value' => 'state1',
                'color' => '0',
                'flag' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'text' => 'state2',
                'value' => 'state2',
                'color' => '0',
                'flag' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'text' => 'state3',
                'value' => 'state3',
                'color' => '0',
                'flag' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'text' => 'state4',
                'value' => 'state4',
                'color' => '0',
                'flag' => '0',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}