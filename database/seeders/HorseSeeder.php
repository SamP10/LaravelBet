<?php

namespace Database\Seeders;

use App\Models\horse;
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
