<?php

namespace Database\Seeders;

use App\Models\Members;
use Illuminate\Database\Seeder;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Members::factory()->count(100)->create();
    }
}
