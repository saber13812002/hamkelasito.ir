<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


//        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'name' => 'صابر طباطبائییزدی',
                'email' => 'saber@gmail.com',
                'email_verified_at' => '2023-09-20 17:30:16',
                'password' => '$2y$10$ZldgaeeYo3h7NDC6J5qepuX8.2MDLtop/49MEbn9s40kQjRJsCbTC',
                'remember_token' => NULL,
                'admin_level' => 100,
                'created_at' => '2023-09-20 17:30:16',
                'updated_at' => '2023-09-20 17:30:16',
                'locale' => NULL,
            ),
            1 =>
            array (
                'name' => 'صابر طباطبائییزدی',
                'email' => 'saber.tabataba@gmail.com',
                'email_verified_at' => '2023-09-20 17:30:16',
                'password' => '$2y$10$LkxL2keSQIaq33nlS8xOl.MaFQVvhOs9qzNwaof.OMn0wmOspIL6i',
                'remember_token' => NULL,
                'admin_level' => 100,
                'created_at' => '2023-11-06 16:54:23',
                'updated_at' => '2023-11-06 16:54:23',
                'locale' => NULL,
            ),
            2 =>
            array (
                'name' => 'rikobih739@mkurg.com',
                'email' => 'rikobih739@mkurg.com',
                'email_verified_at' => '2023-11-11 17:40:51',
                'password' => '$2y$10$PbCDFHJj.vTyEKOjFC7qOe2tyZuWOGKanRdyBwGV5dYpfw9ukj8A2',
                'remember_token' => NULL,
                'admin_level' => 100,
                'created_at' => '2023-11-11 17:34:49',
                'updated_at' => '2023-11-11 17:40:51',
                'locale' => NULL,
            ),
        ));


    }
}
