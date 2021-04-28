<?php

namespace Database\Seeders;

use App\Models\Gametype;
use Illuminate\Database\Seeder;

class GametypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = [
            ['game_type'=>"Scratchcard"],
            ['game_type'=>"Slot"],
            ['game_type'=>"Instant Win"],
        ];

        foreach($type as $types){
            Gametype::create([
                'game_type' => $types['game_type'],
            ]);
        }
    }
}
