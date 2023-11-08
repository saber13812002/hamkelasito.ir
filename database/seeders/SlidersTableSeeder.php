<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('sliders')->delete();

        \DB::table('sliders')->insert(array (
            0 =>
            array (
                'id' => 1,
                'member_id' => 101,
                'description' => NULL,
                'image_3x4' => '037.webp',
                'image_large' => '001-l.webp',
                'image_medium' => '001-m.webp',
                'image_small' => '001-s.webp',
                'video' => 'video-001.mp4',
                'order' => 1,
                'enable' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'member_id' => 102,
            'description' => 'I have been modeling for 12 years. I have done over 200 shoots a year, so companies that are concerned about direction can also rely on me. [my experience] I have experience in beauty, bridal, kimono, business, travel, and family ad shoots, apparel e-commerce shoots, magazines, stock photo shoots, video, reporter, and live-streaming corporate projects. I\'m also able to provide the following services. ・Clothing size: size 7, S-M ・Shoe size: 23.5cm, size M Various outfits are available. (suits, office casual, yoga/training wear, loungewear, casual wear, accessories, etc.) Hair and makeup can be arranged if necessary. I can also do your hair without makeup. Nails are not provided. [Appeal Points] 1) I\'m confident in our teeth and appreciate a natural smile. I am also good at posing for brand images and situations. 2) I can be entrusted with self hair and makeup for photoshoots. I am particular about beauty, and I also deliver beauty and makeup-related services through live-streaming for major manufacturers. I am also particular about skin care and have received favorable reviews for the lack of retouching. I am also a professional photographer, and I am always ready to respond flexibly on site.',
                'image_3x4' => '038.webp',
                'image_large' => '002-l.webp',
                'image_medium' => '002-m.webp',
                'image_small' => '002-s.webp',
                'video' => 'video-002.mp4',
                'order' => 2,
                'enable' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'member_id' => 103,
                'description' => NULL,
                'image_3x4' => '039.webp',
                'image_large' => '003-l.webp',
                'image_medium' => '003-m.webp',
                'image_small' => '003-s.webp',
                'video' => 'video-003.mp4',
                'order' => 3,
                'enable' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'member_id' => 104,
                'description' => NULL,
                'image_3x4' => '040.webp',
                'image_large' => '004-l.webp',
                'image_medium' => '004-m.webp',
                'image_small' => '004-s.webp',
                'video' => 'video-004.mp4',
                'order' => 4,
                'enable' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'member_id' => 105,
                'description' => NULL,
                'image_3x4' => '041.webp',
                'image_large' => '005-l.webp',
                'image_medium' => '005-m.webp',
                'image_small' => '005-s.webp',
                'video' => 'video-001.mp4',
                'order' => 5,
                'enable' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'member_id' => 106,
                'description' => NULL,
                'image_3x4' => '042.webp',
                'image_large' => '006-l.webp',
                'image_medium' => '006-m.webp',
                'image_small' => '006-s.webp',
                'video' => 'video-002.mp4',
                'order' => 6,
                'enable' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'member_id' => 107,
                'description' => NULL,
                'image_3x4' => '043.webp',
                'image_large' => '007-l.webp',
                'image_medium' => '007-m.webp',
                'image_small' => '007-s.webp',
                'video' => 'video-003.mp4',
                'order' => 7,
                'enable' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));


    }
}
