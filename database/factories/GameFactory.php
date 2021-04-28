<?php

namespace Database\Factories;

use App\Models\Game;
use App\Models\Gametype;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Game::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $game_type=Gametype::all();
        return [
            'name'=>$this->faker->domainWord,
            'company'=>$this->faker->company,
            'jackpot'=>$this->faker->randomFloat(0, 0, 1),
            'game_id'=>$game_type->random()->id
        ];
    }
}
