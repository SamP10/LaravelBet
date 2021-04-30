<?php

namespace Database\Factories;

use App\Models\Sport;
use App\Models\football;
use Illuminate\Database\Eloquent\Factories\Factory;

class SportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sport::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sport_team = football::all();
        return [
            'match_id'=>$this->faker->randomFloat(0, 10000, 99999),
            'away_team'=>$sport_team->random()->team,
            'home_team'=>$sport_team->random()->team,
            'home_odds'=>$this->faker->randomFloat(0, 1, 5)."/".$this->faker->randomFloat(0, 1, 100),
            'away_odds'=>$this->faker->randomFloat(0, 1, 5)."/".$this->faker->randomFloat(0, 1, 100),
        ];
    }
}
