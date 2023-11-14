<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TempTablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('temp_tables')->delete();
        
        \DB::table('temp_tables')->insert(array (
            0 => 
            array (
                'id' => 1,
                'step_id' => 0,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'model_type',
                'type' => 'string',
                'value' => NULL,
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:27:16',
                'updated_at' => '2023-11-12 19:27:16',
            ),
            1 => 
            array (
                'id' => 2,
                'step_id' => 0,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'talent_type',
                'type' => 'string',
                'value' => 'radio_personality,comedian',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:27:16',
                'updated_at' => '2023-11-12 19:27:16',
            ),
            2 => 
            array (
                'id' => 3,
                'step_id' => 0,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'actor_actress_type',
                'type' => 'string',
                'value' => NULL,
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:27:16',
                'updated_at' => '2023-11-12 19:27:16',
            ),
            3 => 
            array (
                'id' => 4,
                'step_id' => 0,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'extra_type',
                'type' => 'string',
                'value' => 'All types of extra',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:27:16',
                'updated_at' => '2023-11-12 19:27:16',
            ),
            4 => 
            array (
                'id' => 5,
                'step_id' => 0,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'gender',
                'type' => 'string',
                'value' => 'male',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:27:16',
                'updated_at' => '2023-11-12 19:27:16',
            ),
            5 => 
            array (
                'id' => 6,
                'step_id' => 0,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'birhtday_year',
                'type' => 'string',
                'value' => '2020',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:27:16',
                'updated_at' => '2023-11-12 19:27:16',
            ),
            6 => 
            array (
                'id' => 7,
                'step_id' => 0,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'birhtday_month',
                'type' => 'string',
                'value' => '4',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:27:16',
                'updated_at' => '2023-11-12 19:27:16',
            ),
            7 => 
            array (
                'id' => 8,
                'step_id' => 0,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'birhtday_day',
                'type' => 'string',
                'value' => '4',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:27:16',
                'updated_at' => '2023-11-12 19:27:16',
            ),
            8 => 
            array (
                'id' => 9,
                'step_id' => 0,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'nationality',
                'type' => 'string',
                'value' => 'Australia',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:27:16',
                'updated_at' => '2023-11-12 19:27:16',
            ),
            9 => 
            array (
                'id' => 10,
                'step_id' => 1,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'first_name_furigana',
                'type' => 'string',
                'value' => '島',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:28:29',
                'updated_at' => '2023-11-12 19:28:29',
            ),
            10 => 
            array (
                'id' => 11,
                'step_id' => 1,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'middle_name',
                'type' => 'string',
                'value' => 'adf',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:28:29',
                'updated_at' => '2023-11-12 19:28:29',
            ),
            11 => 
            array (
                'id' => 12,
                'step_id' => 1,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'last_name_furigana',
                'type' => 'string',
                'value' => '島',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:28:29',
                'updated_at' => '2023-11-12 19:28:29',
            ),
            12 => 
            array (
                'id' => 13,
                'step_id' => 1,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'stage_name',
                'type' => 'string',
                'value' => 'adf',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:28:29',
                'updated_at' => '2023-11-12 19:28:29',
            ),
            13 => 
            array (
                'id' => 14,
                'step_id' => 1,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'have_other_nationality',
                'type' => 'string',
                'value' => 'yes',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:28:29',
                'updated_at' => '2023-11-12 19:28:29',
            ),
            14 => 
            array (
                'id' => 15,
                'step_id' => 1,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'other_nationality',
                'type' => 'string',
                'value' => 'Albania',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:28:29',
                'updated_at' => '2023-11-12 19:28:29',
            ),
            15 => 
            array (
                'id' => 16,
                'step_id' => 1,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'are_you_mixed',
                'type' => 'string',
                'value' => 'yes',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:28:29',
                'updated_at' => '2023-11-12 19:28:29',
            ),
            16 => 
            array (
                'id' => 17,
                'step_id' => 1,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'fathers_nationality',
                'type' => 'string',
                'value' => 'Albania',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:28:29',
                'updated_at' => '2023-11-12 19:28:29',
            ),
            17 => 
            array (
                'id' => 18,
                'step_id' => 1,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'mothers_nationality',
                'type' => 'string',
                'value' => 'Åland Islands',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:28:29',
                'updated_at' => '2023-11-12 19:28:29',
            ),
            18 => 
            array (
                'id' => 19,
                'step_id' => 2,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'eye_color',
                'type' => 'string',
                'value' => 'Brown',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:29:08',
                'updated_at' => '2023-11-12 19:29:08',
            ),
            19 => 
            array (
                'id' => 20,
                'step_id' => 2,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'current_hair_color',
                'type' => 'string',
                'value' => 'Brown',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:29:08',
                'updated_at' => '2023-11-12 19:29:08',
            ),
            20 => 
            array (
                'id' => 21,
                'step_id' => 2,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'height',
                'type' => 'string',
                'value' => '177',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:29:08',
                'updated_at' => '2023-11-12 19:29:08',
            ),
            21 => 
            array (
                'id' => 22,
                'step_id' => 2,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'weight',
                'type' => 'string',
                'value' => '66',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:29:08',
                'updated_at' => '2023-11-12 19:29:08',
            ),
            22 => 
            array (
                'id' => 23,
                'step_id' => 2,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'bust',
                'type' => 'string',
                'value' => '77',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:29:08',
                'updated_at' => '2023-11-12 19:29:08',
            ),
            23 => 
            array (
                'id' => 24,
                'step_id' => 2,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'hips',
                'type' => 'string',
                'value' => '66',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:29:08',
                'updated_at' => '2023-11-12 19:29:08',
            ),
            24 => 
            array (
                'id' => 25,
                'step_id' => 2,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'waist',
                'type' => 'string',
                'value' => '55',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:29:08',
                'updated_at' => '2023-11-12 19:29:08',
            ),
            25 => 
            array (
                'id' => 26,
                'step_id' => 2,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'size_unit',
                'type' => 'string',
                'value' => 'eu',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:29:08',
                'updated_at' => '2023-11-12 19:29:08',
            ),
            26 => 
            array (
                'id' => 27,
                'step_id' => 2,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'shoe_jp_size',
                'type' => 'string',
                'value' => NULL,
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:29:08',
                'updated_at' => '2023-11-12 19:29:08',
            ),
            27 => 
            array (
                'id' => 28,
                'step_id' => 2,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'shoe_uk_size',
                'type' => 'string',
                'value' => NULL,
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:29:08',
                'updated_at' => '2023-11-12 19:29:08',
            ),
            28 => 
            array (
                'id' => 29,
                'step_id' => 2,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'shoe_us_men_size',
                'type' => 'string',
                'value' => NULL,
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:29:08',
                'updated_at' => '2023-11-12 19:29:08',
            ),
            29 => 
            array (
                'id' => 30,
                'step_id' => 2,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'shoe_us_women_size',
                'type' => 'string',
                'value' => NULL,
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:29:08',
                'updated_at' => '2023-11-12 19:29:08',
            ),
            30 => 
            array (
                'id' => 31,
                'step_id' => 2,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'shoe_eu_size',
                'type' => 'string',
                'value' => '44',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:29:08',
                'updated_at' => '2023-11-12 19:29:08',
            ),
            31 => 
            array (
                'id' => 32,
                'step_id' => 2,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'clothe_size',
                'type' => 'string',
                'value' => '90',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:29:08',
                'updated_at' => '2023-11-12 19:29:08',
            ),
            32 => 
            array (
                'id' => 33,
                'step_id' => 3,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'native_language',
                'type' => 'string',
                'value' => 'dd',
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:32:22',
                'updated_at' => '2023-11-12 19:32:22',
            ),
            33 => 
            array (
                'id' => 34,
                'step_id' => 3,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'other_language',
                'type' => 'json',
                'value' => NULL,
                'text' => NULL,
                'json' => '[{"level": {"text": "Advanced", "type": "select", "input": "Advanced"}, "language": {"text": "Afrikaans", "type": "select", "input": "af"}}, {"level": {"text": "Native", "type": "select", "input": "Native"}, "language": {"text": "Abkhaz", "type": "select", "input": "ab"}}]',
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:32:22',
                'updated_at' => '2023-11-12 19:32:22',
            ),
            34 => 
            array (
                'id' => 35,
                'step_id' => 3,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'biography',
                'type' => 'text',
                'value' => NULL,
                'text' => 'Begin with your name and current role. Detail your key skills and how they\'ve influenced your career trajectory. Summarize your professional experiences, highlighting significant achievements. Mention your educational background and any specialized training. Optionally, shed light on personal interests that offer a glimpse into your character. Wrap up with your future aspirations. Ensure your biography remains genuine, and update a',
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:32:22',
                'updated_at' => '2023-11-12 19:32:22',
            ),
            35 => 
            array (
                'id' => 36,
                'step_id' => 3,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'skills',
                'type' => 'json',
                'value' => NULL,
                'text' => NULL,
                'json' => '[{"audios": {"text": [], "type": "upload", "input": ""}, "photos": {"text": [], "type": "upload", "input": ""}, "videos": {"text": [], "type": "upload", "input": ""}, "skills_type": {"text": "Dance Skill", "type": "select", "input": "dance_skill"}, "other_skills": {"text": "", "type": "text", "input": ""}, "dance_skill_type": {"text": "Ballet", "type": "select", "input": "ballet"}, "sport_skill_type": {"text": "", "type": "select", "input": ""}, "acting_skill_type": {"text": "", "type": "select", "input": ""}, "dance_other_skills": {"text": "", "type": "text", "input": ""}, "driving_skill_type": {"text": "", "type": "select", "input": ""}, "singing_skill_type": {"text": "", "type": "select", "input": ""}, "skills_description": {"text": "\\nBegin with your name and current role. Detail your key skills and how they\'ve influenced your career trajectory. Summarize your professional experiences, highlighting significant achievements. Mention your educational background and any specialized training. Optionally, shed light on personal interests that offer a glimpse into your character. Wrap up with your future aspirations. Ensure your biography remains genuine, and update a", "type": "textarea", "input": "\\nBegin with your name and current role. Detail your key skills and how they\'ve influenced your career trajectory. Summarize your professional experiences, highlighting significant achievements. Mention your educational background and any specialized training. Optionally, shed light on personal interests that offer a glimpse into your character. Wrap up with your future aspirations. Ensure your biography remains genuine, and update a"}, "sport_other_skills": {"text": "", "type": "text", "input": ""}, "acting_other_skills": {"text": "", "type": "text", "input": ""}, "culinary_skill_type": {"text": "", "type": "select", "input": ""}, "driving_other_skills": {"text": "", "type": "text", "input": ""}, "singing_other_skills": {"text": "", "type": "text", "input": ""}, "culinary_other_skills": {"text": "", "type": "text", "input": ""}, "visual_art_skill_type": {"text": "", "type": "select", "input": ""}, "performance_skill_type": {"text": "", "type": "select", "input": ""}, "visual_art_other_skills": {"text": "", "type": "text", "input": ""}, "performance_other_skills": {"text": "", "type": "text", "input": ""}, "musical_instrument_skill_type": {"text": "", "type": "select", "input": ""}, "musical_instrument_other_skills": {"text": "", "type": "text", "input": ""}}]',
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:32:22',
                'updated_at' => '2023-11-12 19:32:22',
            ),
            36 => 
            array (
                'id' => 37,
                'step_id' => 3,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'job_experiences',
                'type' => 'json',
                'value' => NULL,
                'text' => NULL,
            'json' => '[{"type": {"text": "Film", "type": "select", "input": "film"}, "year": {"text": "2021", "type": "select", "input": "2021"}, "month": {"text": "2 (February)", "type": "select", "input": "2"}, "title": {"text": "sdfsdf", "type": "text", "input": "sdfsdf"}, "audios": {"text": [], "type": "upload", "input": ""}, "photos": {"text": [], "type": "upload", "input": ""}, "videos": {"text": [], "type": "upload", "input": ""}, "other_type": {"text": "", "type": "text", "input": ""}, "description": {"text": "sdf\\nBegin with your name and current role. Detail your key skills and how they\'ve influenced your career trajectory. Summarize your professional experiences, highlighting significant achievements. Mention your educational background and any specialized training. Optionally, shed light on personal interests that offer a glimpse into your character. Wrap up with your future aspirations. Ensure your biography remains genuine, and update a", "type": "textarea", "input": "sdf\\nBegin with your name and current role. Detail your key skills and how they\'ve influenced your career trajectory. Summarize your professional experiences, highlighting significant achievements. Mention your educational background and any specialized training. Optionally, shed light on personal interests that offer a glimpse into your character. Wrap up with your future aspirations. Ensure your biography remains genuine, and update a"}}]',
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:32:22',
                'updated_at' => '2023-11-12 19:32:22',
            ),
            37 => 
            array (
                'id' => 38,
                'step_id' => 3,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'job_experiences_pdf',
                'type' => 'file',
                'value' => NULL,
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:32:22',
                'updated_at' => '2023-11-12 19:32:57',
            ),
            38 => 
            array (
                'id' => 39,
                'step_id' => 4,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'profile_image',
                'type' => 'file',
                'value' => NULL,
                'text' => '6551285b1f259',
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:32:57',
                'updated_at' => '2023-11-12 19:32:57',
            ),
            39 => 
            array (
                'id' => 40,
                'step_id' => 4,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'full_length_photo',
                'type' => 'file',
                'value' => NULL,
                'text' => '65512866bc2cb',
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:32:57',
                'updated_at' => '2023-11-12 19:32:57',
            ),
            40 => 
            array (
                'id' => 41,
                'step_id' => 4,
                'user_id' => 4,
                'member_id' => 1,
                'model_name' => 'Member',
                'model_field' => 'other_photos',
                'type' => 'file',
                'value' => NULL,
                'text' => NULL,
                'json' => NULL,
                'approved_at' => NULL,
                'admin_id' => 1,
                'created_at' => '2023-11-12 19:32:57',
                'updated_at' => '2023-11-12 19:32:57',
            ),
        ));
        
        
    }
}