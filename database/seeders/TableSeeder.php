<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Table;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $game = [
            ['game'=>"Blackjack",
                'table_no'=>1,
                'min_bet'=>0.50],
            ['game'=>"Blackjack",
                'table_no'=>2,
                'min_bet'=>1],
            ['game'=>"Blackjack",
                'table_no'=>3,
                'min_bet'=>5],
            ['game'=>"Roulette",
                'table_no'=>4,
                'min_bet'=>0.50],
            ['game'=>"Roulette",
                'table_no'=>5,
                'min_bet'=>2],
            ['game'=>"Backgammon",
                'table_no'=>6,
                'min_bet'=>1.00],
            ['game'=>"Backgammon",
                'table_no'=>7,
                'min_bet'=>10],
            ['game'=>"Poker",
                'table_no'=>8,
                'min_bet'=>5],
            ['game'=>"Poker",
                'table_no'=>9,
                'min_bet'=>10],
            ['game'=>"Poker",
                'table_no'=>10,
                'min_bet'=>100],
            ['game'=>"Poker",
                'table_no'=>11,
                'min_bet'=>1],
        ];
        foreach ($game as $games){
            Table::create([
               'game'=> $games['game'],
                'table_no'=>$games['table_no'],
                'min_bet'=>$games['min_bet']
            ]);
        }
    }
}
