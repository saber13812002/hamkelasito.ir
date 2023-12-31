<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(CategoriesTableSeeder::class);
        $this->call(MemberSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(MembersTableSeeder::class);
        $this->call(TempFieldsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
//        $this->call(TempTablesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(StatesTableSeeder::class);


    }
}
