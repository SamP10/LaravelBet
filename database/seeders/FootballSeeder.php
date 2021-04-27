<?php

namespace Database\Seeders;

use Database\Factories\FootballFactory;
use App\Models\football;
use Illuminate\Database\Seeder;

class FootballSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Football::factory() -> times (20) ->create();
    }
}
