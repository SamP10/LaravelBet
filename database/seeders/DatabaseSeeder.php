<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this -> call([
           FootballSeeder::class,
            HorseSeeder::class,
            GametypeSeeder::class,
            GameSeeder::class,
            SportSeeder::class,
            TableSeeder::class
        ]);
    }
}
