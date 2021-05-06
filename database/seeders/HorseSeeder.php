<?php

namespace Database\Seeders;

use App\Models\Horse;
use Illuminate\Database\Seeder;

class HorseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Horse::factory() -> times (20) ->create();
    }
}
