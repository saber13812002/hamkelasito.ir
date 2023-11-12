<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TempFieldsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('temp_fields')->delete();
        
        \DB::table('temp_fields')->insert(array (
            0 => 
            array (
                'id' => 1,
                'step_id' => 0,
                'model_name' => 'Member',
                'model_field' => 'model_type',
                'request_key' => 'model_type',
                'type' => 'string',
                'enabled_at' => '2023-11-12 13:01:08',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'step_id' => 0,
                'model_name' => 'Member',
                'model_field' => 'talent_type',
                'request_key' => 'talent_type',
                'type' => 'string',
                'enabled_at' => '2023-11-12 13:01:08',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'step_id' => 0,
                'model_name' => 'Member',
                'model_field' => 'actor_actress_type',
                'request_key' => 'actor_actress_type',
                'type' => 'string',
                'enabled_at' => '2023-11-12 13:01:08',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'step_id' => 0,
                'model_name' => 'Member',
                'model_field' => 'extra_type',
                'request_key' => 'extra_type',
                'type' => 'string',
                'enabled_at' => '2023-11-12 13:01:08',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'step_id' => 0,
                'model_name' => 'Member',
                'model_field' => 'gender',
                'request_key' => 'gender',
                'type' => 'string',
                'enabled_at' => '2023-11-12 13:01:08',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'step_id' => 0,
                'model_name' => 'Member',
                'model_field' => 'birhtday_year',
                'request_key' => 'birhtday_year',
                'type' => 'string',
                'enabled_at' => '2023-11-12 13:01:08',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'step_id' => 0,
                'model_name' => 'Member',
                'model_field' => 'birhtday_month',
                'request_key' => 'birhtday_month',
                'type' => 'string',
                'enabled_at' => '2023-11-12 13:01:08',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'step_id' => 0,
                'model_name' => 'Member',
                'model_field' => 'birhtday_day',
                'request_key' => 'birhtday_day',
                'type' => 'string',
                'enabled_at' => '2023-11-12 13:01:08',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'step_id' => 0,
                'model_name' => 'Member',
                'model_field' => 'nationality',
                'request_key' => 'nationality',
                'type' => 'string',
                'enabled_at' => '2023-11-12 13:01:08',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'step_id' => 0,
                'model_name' => 'Member',
                'model_field' => 'name',
                'request_key' => 'first_name',
                'type' => 'string',
                'enabled_at' => '2023-11-12 13:01:08',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'step_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'first_name_furigana',
                'request_key' => 'first_name_furigana',
                'type' => 'string',
                'enabled_at' => '2023-11-12 13:01:08',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'step_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'middle_name',
                'request_key' => 'middle_name',
                'type' => 'string',
                'enabled_at' => '2023-11-12 13:01:08',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'step_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'family',
                'request_key' => 'last_name',
                'type' => 'string',
                'enabled_at' => '2023-11-12 13:01:08',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'step_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'last_name_furigana',
                'request_key' => 'last_name_furigana',
                'type' => 'string',
                'enabled_at' => '2023-11-12 13:01:08',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'step_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'stage_name',
                'request_key' => 'stage_name',
                'type' => 'string',
                'enabled_at' => '2023-11-12 13:01:08',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'step_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'have_other_nationality',
                'request_key' => 'have_other_nationality',
                'type' => 'string',
                'enabled_at' => '2023-11-12 13:01:08',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'step_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'other_nationality',
                'request_key' => 'other_nationality',
                'type' => 'string',
                'enabled_at' => '2023-11-12 13:01:08',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'step_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'are_you_mixed',
                'request_key' => 'are_you_mixed',
                'type' => 'string',
                'enabled_at' => '2023-11-12 13:01:08',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'step_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'fathers_nationality',
                'request_key' => 'fathers_nationality',
                'type' => 'string',
                'enabled_at' => '2023-11-12 13:01:08',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'step_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'mothers_nationality',
                'request_key' => 'mothers_nationality',
                'type' => 'string',
                'enabled_at' => '2023-11-12 13:01:08',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}