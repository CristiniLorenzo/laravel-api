<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ProjectsTableSeeder;
use Database\Seeders\TypesTableSeeder;
use Database\Seeders\TechnologiesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            ProjectsTableSeeder::class,
            TypesTableSeeder::class,
            TechnologiesTableSeeder::class,
        ]);
    }
}